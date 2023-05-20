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

// route blog
Route::get('/', 'App\Http\Controllers\BlogController@home');
Route::get('/home', 'App\Http\Controllers\BlogController@home');
Route::get('/lihat-peminjaman', 'App\Http\Controllers\PeminjamanController@lihat');
Route::get('/input-peminjaman', 'App\Http\Controllers\PeminjamanController@input');
