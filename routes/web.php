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
    return view('beranda');
});

// daftar alumni
Route::get('/alumnus', function () {
    return view('daftar-alumni');
});
Route::get('/alumnus-admin', function () {
    return view('daftar-alumni-admin');
});

// halaman informasi
Route::get('/posting', function () {
    return view('postingan');
});

Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login')->middleware('guest');
Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('register')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\AuthController@postLogin')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\AuthController@postRegister')->middleware('guest');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->middleware('auth')->name('logout');
Route::get('/home', 'App\Http\Controllers\AuthController@home')->middleware('auth')->name('home');
