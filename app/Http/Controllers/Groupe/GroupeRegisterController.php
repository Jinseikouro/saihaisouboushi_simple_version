<?php

namespace App\Http\Controllers\Groupe;

use App\Http\Controllers\Controller;
use App\Models\Groupe;
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
        $user->groupe_id = null;
        $user->save();
        return redirect()->route('profile.edit');
    }
}
