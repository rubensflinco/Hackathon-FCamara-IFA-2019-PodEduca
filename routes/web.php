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
Auth::routes();

Route::get('/', function () {
    return view('login.index');
});

Route::get('/', 'Auth\LoginController@index')->name('login');

Route::post('/', 'Auth\LoginController@login')->name('login');

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
