@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
        <li><a href="/">Home</a></li>
        <li class="active">Encontro</li>
        @csrf
        <a class="btn btn-warning btn-md pull-right" href="/dashboard/campanha/criar">Cadastrar campanha</a>
        <br /><br />
      </ol>

      <form method="POST" class="form form-black">

      <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-tag" aria-hidden="true"></i> {NOME}
          </div>
          <div class="panel-body">
              <select value="" id="poder" name="poder" class="form-control">
                  <option value="null">Selecione o Poder</option>
              </select>
              <select value="" id="missao" name="missao" class="form-control">
                  <option value="null">Selecione a missão</option>
              </select>
          </div>
        </div>

      </form>
      
    </div>
  </div>
</div>
@endsection



