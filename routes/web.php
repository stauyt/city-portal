<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return redirect('/home');
});

Route::get('/auth/login', function () {
    return view('pages.auth');
})->name('auth.login');
Route::get('/auth/reg', function () {
    return view('pages.auth');
})->name('auth.reg');

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/profile/admin', function () {
    return view('pages.profile');
})->name('profile.admin');

Route::get('/profile/order', function () {
    return view('pages.order');
})->name('profile.order');

Route::post('/user', [UserController::class, 'create']);
