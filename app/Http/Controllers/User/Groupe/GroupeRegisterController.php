<?php

namespace App\Http\Controllers\User\Groupe;

use App\Http\Controllers\Controller;
use App\Models\Groupe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class GroupeRegisterController extends Controller
{
    public function create(): View
    {
        return view('user.groupe.groupe-register');
    }

    public function store(Request $request): RedirectResponse
    {
        // groupe登録の際のvalidationです。
        // 郵便番号は7桁の整数のみ有効です。
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:' . Groupe::class],
            'post_code' => ['required', 'integer', 'digits:7'],
            'address' => ['required', 'string', 'max:255']
        ]);

        // ユーザーがすでに別のグループに所属しているか確認
        $user = Auth::user();
        $previousGroupId = $user->groupe_id;

        // ユーザーのgroupe_idを更新
        $user->groupe_id = null; // 一旦nullに設定
        $user->save();

        // もし前のグループが存在し、かつそのグループに他のメンバーがいない場合、グループを削除
        if ($previousGroupId) {
            $group = Groupe::find($previousGroupId);
            $usersInGroup = User::where('groupe_id', $previousGroupId)->get();

            if ($usersInGroup->isEmpty()) {
                // グループに所属するユーザー数が1人の場合
                $group->delete();
            }
        }

        // 新しいグループを作成
        $groupe = Groupe::create([
            'name' => $request->name,
            'post_code' => $request->post_code,
            'address' => $request->address
        ]);

        // ユーザーのgroupe_idを新しいグループのIDに更新
        $user->groupe_id = $groupe->id;
        $user->save();

        return redirect(RouteServiceProvider::HOME);
    }


    public function secession()
    {
        $user = Auth::user();
        $groupe_id = $user->groupe_id;

        // ユーザーをグループから削除
        $user->groupe_id = null;
        $user->save();

        // 現在のグループに他のユーザーがいない場合、グループを削除
        $group = Groupe::find($groupe_id); // Groupeモデルを取得するためにfindを使用
        $usersInGroupe = User::where('groupe_id', $groupe_id)->get();

        if ($usersInGroupe->isEmpty())
        { // isEmpty() メソッドを呼び出すために () を追加
            // グループに所属するユーザー数が1人の場合
            $group->delete();
            // リダイレクトを行う前に、この時点でグループが削除される可能性があるため、
            // リダイレクトを行う前に処理を終了することが重要です。
            // これにより、削除されたグループにアクセスしようとするエラーが防げます。
        }


        return redirect()->route('user.profile.edit');
    }
}
