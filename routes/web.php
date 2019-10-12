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
Auth::routes();


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/instituicao/cadastrar', 'InstituicaoController@index')->name('instituicao.cadastrar');
Route::post('/dashboard/instituicao/cadastrar', 'InstituicaoController@cadastrar');

Route::get('/dashboard/turma/cadastrar', 'TurmaController@index')->name('turma.cadastrar');
Route::post('/dashboard/turma/cadastrar', 'TurmaController@cadastrar');


