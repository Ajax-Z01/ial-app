<?php

use App\Mail\AccountApproved;
use Illuminate\Support\Facades\Mail;
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
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\FormResponseController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\NotificationsController;

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

Route::get('/news', [MainController::class, 'news'])->name('news');

Route::get('/news-{slug}', [MainController::class, 'post'])->name('post');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::post('/form/submit', [FormResponseController::class, 'store'])->name('form.submit');

Route::get('/concept', [MainController::class, 'concept'])->name('concept');

Route::get('/linac', [MainController::class, 'linac'])->name('linac');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset-password', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginPost')->name('login.post');
    Route::get('logout', 'logout')->name('logout');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerPost')->name('register.post');
});

Route::middleware(['IsApproved'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/notifications', [NotificationsController::class, 'notifications'])->name('notifications');

    Route::get('/filamen', [ChartJSController::class, 'filamen'])->name('filamen');
    Route::get('/filamen/export', [FilamenController::class, 'export'])->name('filamen.export');
    Route::post('/save-filamen', [FilamenController::class, 'store']);

    Route::get('/optic', [ChartJSController::class, 'optic'])->name('optic');
    Route::get('/optic/export', [OpticController::class, 'export'])->name('optic.export');
    Route::post('/save-optic', [OpticController::class, 'store']);

    Route::get('/vakum', [ChartJSController::class, 'vakum'])->name('vakum');
    Route::get('/vakum/export', [VakumController::class, 'export'])->name('vakum.export');
    Route::post('/save-vakum', [VakumController::class, 'store']);

    Route::get('/video', [DashboardController::class, 'video'])->name('video');

    Route::get('/video-conference', [ConferenceController::class, 'index'])->name('video_conference');

    Route::get('/contact_admin', [FormResponseController::class, 'contact'])->name('contact_admin');
    Route::post('/contact_admin/submit', [FormResponseController::class, 'contact_store'])->name('contact.submit');

    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/profile-edit', [UserController::class, 'edit_profile'])->name('profile.edit');
    Route::put('/profile/edit/{id}', [UserController::class, 'update_profile'])->whereNumber('id')->name('profile.update');
});

Route::middleware(['IsAdmin', 'IsApproved'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::get('/posts-create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
    Route::get('/post-{id}-edit', [PostController::class, 'edit'])->whereNumber('id')->name('post.edit');
    Route::put('/post/{id}/edit', [PostController::class, 'update'])->whereNumber('id')->name('post.update');
    Route::delete('/post/{id}/delete', [PostController::class, 'destroy'])->whereNumber('id')->name('post.delete');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->whereNumber('id')->name('user.edit');
    Route::put('/user/{id}/edit', [UserController::class, 'update'])->whereNumber('id')->name('user.update');
    Route::delete('/user/{id}/delete', [UserController::class, 'destroy'])->whereNumber('id')->name('user.delete');

    Route::get('/messages', [FormResponseController::class, 'index'])->name('messages');

    Route::get('/conference', [ConferenceController::class, 'conference'])->name('conference');

    Route::post('/conference/update', [ConferenceController::class, 'update'])->name('conference.update');
});
