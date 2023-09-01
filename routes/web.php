<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ToggleAbsenceController;
use App\Http\Controllers\Groupe\
{
    GroupeMemberController,
    GroupeRegisterController,
    GroupeShowListController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/profile',[GroupeRegisterController::class,'secession'])->name('groupe-secession');

    Route::prefix('groupe')->group(function ()
    {
        Route::get('register',[GroupeRegisterController::class,'create'], )->name('groupe-register');
        Route::post('register', [GroupeRegisterController::class, 'store']);

        Route::get('showlist',[GroupeShowListController::class,'showList'])->name('groupe-showlist');

        Route::get('member/{groupes}',[GroupeMemberController::class,'memberList'])->name('groupe-member');
        Route::post('member/{groupes}',[GroupeMemberController::class,'joinGroupe']);
    });

    Route::get('user/absence', [ToggleAbsenceController::class, 'show'])->name('toggle-absence');
    Route::post('user/absence', [ToggleAbsenceController::class, 'toggleAbsence']);
});


require __DIR__.'/auth.php';
