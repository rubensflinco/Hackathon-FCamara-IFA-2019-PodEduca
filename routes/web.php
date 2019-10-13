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
Route::get('/login', 'Auth\LoginController@index');
Route::get('/', function () { return view('login.index'); });
Route::get('/', 'Auth\LoginController@index')->name('login');

Route::post('/', 'Auth\LoginController@login')->name('login');
Route::get('/login', function () { return view('login.index'); });

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/perfil', function () {
    return view('dashboard.perfil');
});

//Rotas para turma
Route::get('/dashboard/turma/listar', 'TurmaController@index')->name('turma.cadastrar');
Route::get('/dashboard/turmas', 'TurmaController@index')->name('turma.cadastrar');
Route::get('/dashboard/turma/cadastrar', 'TurmaController@cadastrarForm');
Route::get('/dashboard/turma/presenca/lancar', 'TurmaController@presenca');
Route::post('/dashboard/turma/cadastrar', 'TurmaController@cadastrar');


Route::get('/dashboard/participante/criar', function () {
    return view('dashboard.facilitador.participante.criar');
});


//Rotas para Facilitadores
//Participantes
Route::get('/dashboard/participante/criar', 'ParticipanteController@cadastrarForm')->name('participante.cadastrar');
Route::post('/dashboard/participante/criar', 'ParticipanteController@cadastrar');
Route::get('/dashboard/participante/listar', 'ParticipanteController@index')->name('participante.listar');
Route::get('/dashboard/participante/editar/{id}', 'ParticipanteController@editarForm');
Route::post('/dashboard/participante/editar/{id}', 'ParticipanteController@editar');

//Rotas para Admin

//Rotas para instituição
Route::get('/dashboard/poder/cadastrar', 'PoderController@cadastrarForm')->name('poder.cadastrar');
Route::post('/dashboard/poder/cadastrar', 'PoderController@cadastrar');
Route::get('/dashboard/poder/listar', 'PoderController@index')->name('poder.listar');
Route::delete('/dashboard/poder/remover/{id}', 'PoderController@remover');
Route::get('/dashboard/poder/editar/{id}', 'PoderController@editarForm');
Route::post('/dashboard/poder/editar/{id}', 'PoderController@editar');

//Rotas para instituição
Route::get('/dashboard/instituicao/cadastrar', 'InstituicaoController@cadastrarForm')->name('instituicao.cadastrar');
Route::post('/dashboard/instituicao/cadastrar', 'InstituicaoController@cadastrar');
Route::get('/dashboard/instituicao/listar', 'InstituicaoController@index')->name('instituicao.listar');
Route::delete('/dashboard/instituicao/remover/{id}', 'InstituicaoController@remover');
Route::get('/dashboard/instituicao/editar/{id}', 'InstituicaoController@editarForm');
Route::post('/dashboard/instituicao/editar/{id}', 'InstituicaoController@editar');
//Rotas para facilitadores




