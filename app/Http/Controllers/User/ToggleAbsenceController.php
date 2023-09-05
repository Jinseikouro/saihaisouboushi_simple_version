<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Groupe;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ToggleAbsenceController extends Controller
{
    //usersテーブルのデータを引き渡してtoggle-absenceを表示します。
    public function show()
    {
        $user = Auth::user();;
        return view('user.toggle-absence',compact('user'));
    }

    //画面上でボタンを押された場合に、usersテーブルのabsenceの中身を1->0もしくは0->1に入れ替えます。
    public function toggleAbsence(Request $request)
    {
        $user = User::findOrFail($request->input('user_id'));

        $user->update
        ([
            'absence' => $user->absence ? 0 : 1,
        ]);

        // 所属するグループの groupe_id を取得
        $groupeId = $user->groupe_id;

        // 同じグループに所属する他のユーザーの中に absence が 1 のユーザーがいるか調べる
        $absenceInGroup = User::where('groupe_id', $groupeId)
            ->where('absence', 1)
            ->exists();

        // グループの absence カラムを更新
        $groupe = Groupe::find($groupeId); // 正しい Groupe レコードを取得する
        if ($absenceInGroup) {
            $groupe->update(['absence' => 1]);
        } else {
            $groupe->update(['absence' => 0]);
    }


        return redirect()->route('toggle-absence', ['user' => $user]);

    }
}
