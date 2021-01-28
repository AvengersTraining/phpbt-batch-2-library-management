<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookTitleController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EmailController;

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

// admin routes
Route::prefix('admin')->middleware(['auth', 'is.admin'])->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.genres.index');
    })->name('index');
    Route::resource('books', BookController::class)->except('create');
    Route::resource('genres', GenreController::class)->except('show');
    Route::resource('users', UserController::class);
    Route::resource('book_titles', BookTitleController::class)->except('show');
    Route::get('/orders/return', [OrderController::class, 'return'])->name('orders.return');
    Route::put('/orders/update', [OrderController::class, 'update'])->name('orders.update');
    Route::resource('orders', OrderController::class)->except([
        'edit',
        'update',
    ]);
});

Route::get('login', [AuthController::class, 'index'])->name('index');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// temp routes for users
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('book-detail', function () {
    return view('user.pages.book_detail');
});

// confirm email
Route::prefix('/email')->middleware('auth')->group(function ()
{
    Route::get('/verify', [EmailController::class, 'notice'])
        ->name('verification.notice');
    Route::get('/verify/{id}/{hash}', [EmailController::class, 'verify'])
        ->middleware('signed')->name('verification.verify');
    Route::post('/verification-notification', [EmailController::class, 'sendVerification'])
        ->middleware('throttle:6,1')->name('verification.sendVerification');
});

Route::prefix('account')->middleware(['auth', 'verified'])->group(function () {
    Route::get('history', function () {
        return view('user.pages.account.history');
    });
    Route::get('profile', function () {
        return view('user.pages.account.profile');
    })->name('user.profile');
});

Route::get('password/reset', [ForgotPasswordController::class, 'showEmailForm'])->name('password.forgot');
Route::post('password/forgot', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.send');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
