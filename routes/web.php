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
//ララベル表示
Route::get('/', 'UsersController@showList')->name('users');
//コメント画面表示
Route::get('/user/{id}', 'UsersController@showDetail')->name('show');

