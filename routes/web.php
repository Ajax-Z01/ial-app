<?php

use App\Models\Dummy;
use Livewire\Livewire;
use App\Events\DataDummy;
use App\Models\ChartJSModel;
use App\Http\Livewire\LiveDummy;
use App\Http\Livewire\RealTimeDummy;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\RealTimeFilamen;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\OpticController;
use App\Http\Controllers\VakumController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\FilamenController;
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

Route::get('/blog', [MainController::class, 'blog'])->name('blog');

Route::get('/post/{slug}', [MainController::class, 'post'])->name('post');

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

    Route::get('/chart', [ChartJSController::class, 'all_chart'])->name('chart');

    Route::get('/filamen', [ChartJSController::class, 'filamen'])->name('filamen');

    Route::post('/save-filamen', [FilamenController::class, 'store']);

    Route::get('/optic', [ChartJSController::class, 'optic'])->name('optic');

    Route::post('/save-optic', [OpticController::class, 'store']);

    Route::get('/vakum', [ChartJSController::class, 'vakum'])->name('vakum');

    Route::post('/save-vakum', [VakumController::class, 'store']);

    Route::get('/video', [DashboardController::class, 'video'])->name('video');

    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->whereNumber('id')->name('post.edit');
    Route::put('/post/{id}/edit', [PostController::class, 'update'])->whereNumber('id')->name('post.update');
    Route::get('/post/{id}/delete', [PostController::class, 'destroy'])->whereNumber('id')->name('post.delete');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->whereNumber('id')->name('user.edit');
    Route::put('/user/{id}/edit', [UserController::class, 'update'])->whereNumber('id')->name('user.update');
    Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->whereNumber('id')->name('user.delete');
});
