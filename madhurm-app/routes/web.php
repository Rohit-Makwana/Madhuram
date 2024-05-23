<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('home');
});

// for google login url
Route::get('/googleLogin',[HomeController::class,'redirectToGoogle']);
Route::get('/auth/google/callback',[HomeController::class,'handleGoogleCallback']);

// Route::get('login/google', [SocialiteController::class, 'redirectToGoogle'])->name('login.google');
// Route::get('login/google/callback', [SocialiteController::class, 'handleGoogleCallback']);



Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('welcome');
})->name('home')->middleware('auth');
