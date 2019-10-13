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
Route::get('/login', 'Auth\LoginController@index');
Route::get('/', function () { return view('login.index'); });
Route::get('/', 'Auth\LoginController@index')->name('login');

Route::post('/', 'Auth\LoginController@login')->name('login');
Route::get('/login', function () { return view('login.index'); });

Route::get('/register', function () {
    // return view('login.index');
    return view('auth.register');
});
Auth::routes();

Route::get('/home', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/perfil/{id}', 'PerfilController@index');

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
Route::delete('/dashboard/participante/remover/{id}', 'ParticipanteController@remover');
//Rotas para Admin

//Rotas para poder
Route::get('/dashboard/poder/cadastrar', 'PoderController@cadastrarForm')->name('poder.cadastrar');
Route::post('/dashboard/poder/cadastrar', 'PoderController@cadastrar');
Route::get('/dashboard/poderes', 'PoderController@index')->name('poder.listar');
Route::get('/dashboard/poder/listar', 'PoderController@index')->name('poder.listar');
Route::delete('/dashboard/poder/remover/{id}', 'PoderController@remover');
Route::get('/dashboard/poder/editar/{id}', 'PoderController@editarForm');
Route::post('/dashboard/poder/editar/{id}', 'PoderController@editar');

//Rotas para facilitadores
Route::get('/dashboard/facilitadores/criar', 'FacilitadoresController@cadastrarForm')->name('facilitadores.cadastrar');
Route::post('/dashboard/facilitadores/criar', 'FacilitadoresController@cadastrar');
Route::get('/dashboard/facilitadores/listar', 'FacilitadoresController@index')->name('facilitadores.listar');
Route::get('/dashboard/facilitadores/editar/{id}', 'FacilitadoresController@editarForm');
Route::post('/dashboard/facilitadores/editar/{id}', 'FacilitadoresController@editar');
Route::delete('/dashboard/facilitadores/remover/{id}', 'FacilitadoresController@remover');

//Rotas para instituição
Route::get('/dashboard/instituicao/cadastrar', 'InstituicaoController@cadastrarForm')->name('instituicao.cadastrar');
Route::post('/dashboard/instituicao/cadastrar', 'InstituicaoController@cadastrar');
Route::get('/dashboard/instituicao/listar', 'InstituicaoController@index')->name('instituicao.listar');
Route::delete('/dashboard/instituicao/remover/{id}', 'InstituicaoController@remover');
Route::get('/dashboard/instituicao/editar/{id}', 'InstituicaoController@editarForm');
Route::post('/dashboard/instituicao/editar/{id}', 'InstituicaoController@editar');
//Rotas para facilitadores

//Rotas para campanha
Route::get('/dashboard/campanha/criar', 'CampanhaController@cadastrarForm')->name('campanha.cadastrar');
Route::post('/dashboard/campanha/criar', 'CampanhaController@cadastrar');
Route::get('/dashboard/campanha/listar', 'CampanhaController@index')->name('campanha.listar');
Route::delete('/dashboard/campanha/remover/{id}', 'CampanhaController@remover');
Route::get('/dashboard/campanha/editar/{id}', 'CampanhaController@editarForm');
Route::post('/dashboard/campanha/editar/{id}', 'CampanhaController@editar');
Route::get('/dashboard/campanha/listarUsuarios', 'CampanhaController@listarParticipantes');

//Rotas para missão
Route::get('/dashboard/missoes/cadastrar', 'MissoesController@cadastrarForm')->name('missoes.cadastrar');
Route::post('/dashboard/missoes/cadastrar', 'MissoesController@cadastrar');
Route::get('/dashboard/missoes/listar', 'MissoesController@index')->name('missoes.listar');
Route::delete('/dashboard/missoes/remover/{id}', 'MissoesController@remover');
Route::get('/dashboard/missoes/editar/{id}', 'MissoesController@editarForm');
Route::post('/dashboard/missoes/editar/{id}', 'MissoesController@editar');
//rotas para admin


// rotas para ranking
Route::get('/dashboard/ranking', function(){
    return view('dashboard.participante.ranking');
});