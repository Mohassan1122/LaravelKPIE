<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConstumAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/login', [ConstumAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [ConstumAuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [ConstumAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [ConstumAuthController::class, 'loginUser'])->name('login-user');

Route::get('/logout', [ConstumAuthController::class, 'logout']);
Route::get('/confirm-password', [ConstumAuthController::class, 'forgotPassword'])->name('password.confirm');
Route::post('/confirm-password', [ConstumAuthController::class, 'forgotPasswordAction'])->name('password.confirm.link');
Route::get('/confirm-password/{token}', [ConstumAuthController::class, 'showForgotPassword'])->name('password.confirm.show');
Route::post('forgot-password', [ConstumAuthController::class, 'resetPassword'])->name('forgot-password');

Route::middleware(['isLoggedIn'])->group(function () {
    Route::get('/dashboard', [ConstumAuthController::class, 'dashboard']);
});
