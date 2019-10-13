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

        <div class="col-md-3 col-xs-0">
        </div>
          
        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-trophy" aria-hidden="true"></i> Ranking:
            </div>
            <div class="panel-body">
                {{rand(1,100)}}
            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-gamepad" aria-hidden="true"></i> Pontos:
            </div>
            <div class="panel-body">
                {{rand(1,1000)}}
            </div>
          </div>
        </div>

      </div>

      
    </div>
  </div>
</div>
@endsection