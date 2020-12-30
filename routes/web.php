<?php

use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    Route::resource('books', BookController::class)->except('show');
    Route::resource('genres', GenreController::class)->except('show');
});

Route::get('login', [AuthController::class, 'index'])->name('auth.index');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');


// temp routes for users
Route::get('/', function () {
    return view('user.pages.home');
})->name('home');
Route::get('book-detail', function () {
    return view('user.pages.book_detail');
});
Route::prefix('account')->group(function () {
    Route::get('history', function () {
        return view('user.pages.account.history');
    });

    Route::get('profile', function () {
        return view('user.pages.account.profile');
    })->name('user.profile');

    Route::get('password', function () {
        return view('user.pages.account.password');
    });
});
