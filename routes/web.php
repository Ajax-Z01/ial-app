<?php

use App\Events\DataDummy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OpticController;
use App\Http\Controllers\VakumController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\FilamenController;
use App\Http\Controllers\DashboardController;
use App\Models\ChartJSModel;

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

    Route::get('dashboard', [ChartJSController::class, 'index'])->name('dashboard');
    Route::get('chart', [ChartJSController::class, 'all_chart'])->name('chart');

    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->whereNumber('id')->name('posts.edit');
    Route::post('/posts/{id}/edit', [PostController::class, 'update'])->whereNumber('id')->name('posts.update');
    Route::get('/posts/{id}/delete', [PostController::class, 'destroy'])->whereNumber('id')->name('posts.delete');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/user/{id}/approve', [UserController::class, 'approve'])->whereNumber('id')->name('user.approve');
    Route::get('/user/{id}/unapprove', [UserController::class, 'unapprove'])->whereNumber('id')->name('user.unapprove');
    Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->whereNumber('id')->name('user.delete');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->whereNumber('id')->name('user.edit');
    Route::post('/user/{id}/edit', [UserController::class, 'update'])->whereNumber('id')->name('user.update');
    Route::get('/user/{id}/profile', [UserController::class, 'profile'])->whereNumber('id')->name('user.profile');
    Route::get('/user/{id}/setting', [UserController::class, 'setting'])->whereNumber('id')->name('user.setting');
});

Route::middleware(['IsUser', 'IsApproved'])->prefix('user')->name('user.')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/chart', [DashboardController::class, 'chart'])->name('chart');
});

Route::get('/dummy', function () {
    DataDummy::dispatch('test');
});

Route::get('/welcome', function () {
    return view('welcome');
});
