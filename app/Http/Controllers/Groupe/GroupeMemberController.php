<?php

namespace App\Http\Controllers\Groupe;

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

        return view('groupe.groupe-member', compact('groupe', 'users'));
    }

    public function joinGroupe($groupe_id)
    {
        //現在表示しているgroupeのidをログイン中のuserのusersテーブルのgroupe_idカラムに入れます。
        $user = Auth::user();
        $user->groupe_id = $groupe_id;
        $user->save();

        return redirect(RouteServiceProvider::HOME);
    }
}
