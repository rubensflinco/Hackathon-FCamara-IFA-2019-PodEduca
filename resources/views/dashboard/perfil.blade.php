@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li class="active">Perfil</li>
          
          <br/><br/>
      </ol>


      <div class="row">
          
        <div class="col-md-3 col-xs-6">
          <div class="center-img">
            <img src="{{ asset('img/perfil.png') }}" alt="Avatar" class="img-circle" width="100px">
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-tag" aria-hidden="true"></i> Nome:
            </div>
            <div class="panel-body">
                {{@Auth::user()->name}}
            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-group" aria-hidden="true"></i> Grupo:
            </div>
            <div class="panel-body">
                {{@Auth::user()->grupo}}
            </div>
          </div>
        </div>
        
        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-calendar" aria-hidden="true"></i> Data de nascimento:
            </div>
            <div class="panel-body">
                {{@Auth::user()->data_nascimento}}
            </div>
          </div>
        </div>


      </div>

      <hr/><br/>

      
    </div>
  </div>
</div>
@endsection