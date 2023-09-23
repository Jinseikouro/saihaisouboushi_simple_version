<?php

namespace App\Http\Controllers\User\Groupe;

use App\Http\Controllers\Controller;
use App\Models\Groupe;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class GroupeMemberController extends Controller
{
    public function memberList($groupe_id)
    {
        // 指定された groupe_id に関連する groupe_name を取得
        $groupe = Groupe::findOrFail($groupe_id);

        // 指定された groupe_id に関連する user_name を取得
        $users = User::where('groupe_id', $groupe_id)->get();

        return view('user.groupe.groupe-member', compact('groupe', 'users'));
    }

    public function joinGroupe($groupe_id)
    {
        $user = Auth::user();
        $groupe_id_before = $user->groupe_id;

        // ユーザーをグループから削除
        $user->groupe_id = $groupe_id;
        $user->save();

        if($groupe_id_before !== null)
            {

                // 現在のグループに他のユーザーがいない場合、グループを削除
                $group = Groupe::find($groupe_id_before); // Groupeモデルを取得するためにfindを使用
                $usersInGroupe = User::where('groupe_id', $groupe_id_before)->get();

                if ($usersInGroupe->isEmpty())
                { // isEmpty() メソッドを呼び出すために () を追加
                    // グループに所属するユーザー数が1人の場合
                    $group->delete();
                    // リダイレクトを行う前に、この時点でグループが削除される可能性があるため、
                    // リダイレクトを行う前に処理を終了することが重要です。
                    // これにより、削除されたグループにアクセスしようとするエラーが防げます。
                }
            }

        return redirect(RouteServiceProvider::HOME);
    }
}
