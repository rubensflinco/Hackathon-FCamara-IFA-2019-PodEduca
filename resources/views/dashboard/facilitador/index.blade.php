@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <h3 class="text-center">Olá {{@Auth::user()->name}}, tudo bem ?</h3>
      <hr/><br/>

      <div class="row">

        <div class="col-md-3 col-xs-6">
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-users" aria-hidden="true"></i> Participantes:
            </div>
            <div class="panel-body">
                {{ $compact[0] }}
            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-bullhorn" aria-hidden="true"></i> Campanhas:
            </div>
            <div class="panel-body">
                {{ $compact[1] }}
            </div>
          </div>
        </div>
        
      </div>

      <hr/><br/>

      
    </div>
  </div>
</div>
@endsection