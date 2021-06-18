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
Route::get('/postinganu', function () {
    return view('postinganu');
});
Route::get('/buat-posting', function () {
    return view('buat-postingan');
});
