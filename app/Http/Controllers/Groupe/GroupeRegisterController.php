<?php

namespace App\Http\Controllers\Groupe;

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
        return view('groupe.groupe-register');
    }

    public function store(Request $request): RedirectResponse
    {
        //groupe登録の際のvalidationです。
        //郵便番号は7桁の整数のみ有効です。
        $request->validate([
            'name' => ['required','string','max:255','unique:'.Groupe::class],
            'post_code' => ['required','integer','digits:7'],
            'address' => ['required', 'string', 'max:255']
        ]);

        $groupe = Groupe::create([
            'name' => $request->name,
            'post_code' => $request->post_code,
            'address' => $request->address
        ]);

        //ログイン中のuserのusersテーブルのgroupe_idカラムにこのgroupeのidを入れます。
        $user = Auth::user();
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


        return redirect()->route('profile.edit');
    }
}
