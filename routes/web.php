<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [MainController::class, 'landing'])->name('landing');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginPost')->name('login.post');
    Route::get('logout', 'logout')->name('logout');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerPost')->name('register.post');
});

Route::middleware(['IsAdmin', 'IsApproved'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/chart', [DashboardController::class, 'chart'])->name('chart');
    Route::get('/posts', [DashboardController::class, 'post'])->name('posts');
    Route::get('/users', [DashboardController::class, 'user'])->name('users');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/setting', [DashboardController::class, 'setting'])->name('settings');
});

Route::middleware(['IsUser', 'IsApproved'])->prefix('user')->name('user.')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/chart', [DashboardController::class, 'chart'])->name('chart');
});
