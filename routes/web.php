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
// Landing Page
Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login')->middleware('guest');
Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('register')->middleware('guest');
Route::get('/reset', 'App\Http\Controllers\AuthController@forgot')->name('reset')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\AuthController@postLogin')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\AuthController@postRegister')->middleware('guest');
Route::get('/password/email', 'App\Http\Controllers\ResetController@ConfirmEmail')->name('reset')->middleware('guest');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->middleware('auth')->name('logout');
Route::get('/about', 'App\Http\Controllers\AuthController@about')->middleware('auth', 'checkLevel:admin,user')->name('about');

// Auth
Route::get('/password/{user}/update', 'App\Http\Controllers\ResetController@edit')->name('reset')->middleware('guest');
Route::post('/password/{user}/update', 'App\Http\Controllers\ResetController@update')->name('reset')->middleware('guest');


// Beranda
Route::get('/home', 'App\Http\Controllers\BerandaController@home')->middleware('auth', 'checkLevel:admin,user')->name('home');
Route::get('/home/{beranda}/editHeadMaster', 'App\Http\Controllers\BerandaController@editHeadMaster')->middleware('auth', 'checkLevel:admin')->name('home');
Route::get('/home/{beranda}/editEvent', 'App\Http\Controllers\BerandaController@editEvent')->middleware('auth', 'checkLevel:admin')->name('home');
Route::post('/home/{beranda}/editHeadMaster', 'App\Http\Controllers\BerandaController@updateHeadMaster')->middleware('auth', 'checkLevel:admin')->name('home');
Route::post('/home/{beranda}/editEvent', 'App\Http\Controllers\BerandaController@updateEvent')->middleware('auth', 'checkLevel:admin')->name('home');

// Alumnis
Route::get('/alumnis', 'App\Http\Controllers\AlumnisController@index')->middleware('auth', 'checkLevel:admin,user')->name('alumnis');
Route::get('/alumnis/search', 'App\Http\Controllers\AlumnisController@search')->middleware('auth', 'checkLevel:admin,user')->name('alumnis');
Route::get('/alumnis/create', 'App\Http\Controllers\AlumnisController@create')->middleware('auth','checkLevel:admin')->name('alumnis');
Route::get('/alumnis/user', 'App\Http\Controllers\AlumnisController@profile')->middleware('auth', 'checkLevel:admin,user')->name('alumnis');
Route::get('/alumnis/report', 'App\Http\Controllers\AlumnisController@report')->middleware('auth', 'checkLevel:admin,user')->name('alumnis');
Route::get('/alumnis/{user}', 'App\Http\Controllers\AlumnisController@show')->middleware('auth', 'checkLevel:admin,user')->name('alumnis');
Route::get('/alumnis/{user}/print', 'App\Http\Controllers\AlumnisController@print')->middleware('auth', 'checkLevel:admin,user')->name('alumnis');
Route::post('/alumnis', 'App\Http\Controllers\AlumnisController@store')->middleware('auth', 'checkLevel:admin')->name('alumnis');
Route::get('/alumnis/{user}/edit', 'App\Http\Controllers\AlumnisController@edit')->middleware('auth', 'checkLevel:admin')->name('alumnis');
Route::get('/alumnis/{user}/editUser', 'App\Http\Controllers\AlumnisController@editUser')->middleware('auth', 'checkLevel:admin,user')->name('alumnis');
Route::delete('/alumnis/{user}', 'App\Http\Controllers\AlumnisController@destroy')->middleware('auth', 'checkLevel:admin')->name('alumnis');
Route::patch('/alumnis/{user}/user', 'App\Http\Controllers\AlumnisController@updateUser')->middleware('auth', 'checkLevel:admin,user')->name('alumnis');
Route::patch('/alumnis/{user}', 'App\Http\Controllers\AlumnisController@update')->middleware('auth','checkLevel:admin')->name('alumnis');

// Galeri
Route::get('/galeris', 'App\Http\Controllers\GalerisController@index')->middleware('auth', 'checkLevel:admin,user')->name('galeris');
Route::get('/galeris/create', 'App\Http\Controllers\GalerisController@create')->middleware('auth','checkLevel:admin')->name('galeris');
Route::post('/galeris', 'App\Http\Controllers\GalerisController@store')->middleware('auth', 'checkLevel:admin')->name('galeris');
Route::delete('/galeris/{galeri}', 'App\Http\Controllers\GalerisController@destroy')->middleware('auth', 'checkLevel:admin')->name('alumnis');

// Postingan
Route::get('/posts', 'App\Http\Controllers\PostinganController@index')->middleware('auth', 'checkLevel:admin,user')->name('posts');
Route::get('/posts/search', 'App\Http\Controllers\PostinganController@search')->middleware('auth', 'checkLevel:admin,user')->name('posts');
Route::get('/posts/create', 'App\Http\Controllers\PostinganController@create')->middleware('auth', 'checkLevel:admin,user')->name('posts');
Route::get('/posts/{postingan}', 'App\Http\Controllers\PostinganController@show')->middleware('auth', 'checkLevel:admin,user')->name('posts');
Route::post('/posts', 'App\Http\Controllers\PostinganController@store')->middleware('auth', 'checkLevel:admin,user')->name('posts');
Route::delete('/posts/{postingan}', 'App\Http\Controllers\PostinganController@destroy')->middleware('auth', 'checkLevel:admin,user')->name('posts');
Route::patch('/posts/{postingan}', 'App\Http\Controllers\PostinganController@update')->middleware('auth', 'checkLevel:admin,user')->name('posts');

// Search Route
Route::get('/search', 'App\Http\Controllers\SearchController@search')->middleware('auth', 'checkLevel:admin,user')->name('search');

// Email
Route::get('/email/{user}', 'App\Http\Controllers\EmailController@create');
Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');