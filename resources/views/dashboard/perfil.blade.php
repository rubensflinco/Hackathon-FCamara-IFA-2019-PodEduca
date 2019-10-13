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


      <div class="container">
          <div class="center-img">
            <img src="{{ asset('img/perfil.png') }}" alt="Avatar" class="img-circle" width="70px">
            <h4>{{ $perfil->name }}</h4>
            <h6>{{ ucfirst($perfil->grupo) }}</h6>
          </div>
      </div>

      <br/>

      <div class="row">

        <div class="col-md-2 col-xs-0"></div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-tag" aria-hidden="true"></i> Nick:
            </div>
            <div class="panel-body">
                {{ $perfil->nick }}
            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-transgender-alt" aria-hidden="true"></i> Gênero:
            </div>
            <div class="panel-body">
                {{ ucfirst($perfil->genero) }}
            </div>
          </div>
        </div>
        
        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-calendar" aria-hidden="true"></i> Data de nascimento:
            </div>
            <div class="panel-body">
                {{ $perfil->data_nascimento }}
            </div>
          </div>
        </div>

      </div>

      <h3>Poderes: </h3>
      <hr/><br/>

      @foreach ($poderes as $poder)
        <div class="col-md-3 col-xs-6">
          <a href="/dashboard/poder/{{$poder->id}}" class="center-img poderes-perfil">
            <img src="{{ $poder->icone_url }}" class="img-circle img-crop" width="70px" height="70px">
            <h4>{{ $poder->nome }}</h4>
          </a>
        </div>
      @endforeach

    </div>
  </div>
</div>
@endsection