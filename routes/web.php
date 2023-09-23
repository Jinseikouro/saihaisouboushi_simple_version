<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\FrontPages\HelpPrivacyController;



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

Route::get('/',function () {return view('user.front-pages.landing');})->name('welcome');

Route::get('help',function () {return view('user.front-pages.help');})->name('help-page');
Route::get('privacy',function () {return view('user.front-pages.privacy');})->name('privacy-page');
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//
//});


require __DIR__.'/auth.php';
