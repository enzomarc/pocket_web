<?php

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

use Illuminate\Support\Facades\Route;


Route::get('login', 'Auth\LoginController@login')->name('login');
Route::get('signup', 'Auth\LoginController@signup')->name('signup');

Route::get('dashboard', 'UserController@home')->name('dashboard.home');
Route::get('dashboard/getting-started', 'UserController@start')->name('dashboard.start');
Route::get('dashboard/getting-started/activation', 'UserController@activation')->name('dashboard.activation');
