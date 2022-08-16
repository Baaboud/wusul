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

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('user.profile');
})->name('profile')->middleware('auth');

Route::prefix('user')->group(function () {
    Route::get('/account', function () {
        return view('user.account');
    })->name('account');

    Route::get('/security', function () {
        return view('user.security');
    })->name('security');
});

Route::get('/service-provider', function () {
    return view('service_provider');
});

Route::get('/service', function () {
    return view('service_page');
})->name('service');

Route::get('/l', function () {
    return view('user.account');
});
