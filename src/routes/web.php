<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'home'])->name('home');

Route::get('/main', [\App\Http\Controllers\MainController::class, 'main'])->name('main');

Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');

Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

