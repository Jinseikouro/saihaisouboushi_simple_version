<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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

        return redirect()->route('toggle-absence', ['user' => $user]);

    }
}
