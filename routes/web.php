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

// admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');
});


// temp routes for users
Route::get('/', function () {
    return view('user.pages.home');
});

Route::get('book-detail', function () {
    return view('user.pages.book_detail');
});

Route::get('login', function () {
    return view('user.pages.login');
});

Route::prefix('account')->group(function () {

    Route::get('/history', function () {
        return view('user.pages.account.history');
    });

    Route::get('/profile', function () {
        return view('user.pages.account.profile');
    });

    Route::get('/password', function () {
        return view('user.pages.account.password');
    });
});
