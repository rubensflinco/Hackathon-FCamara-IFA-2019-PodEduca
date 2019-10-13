@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')



<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li><a href="/dashboard/poderes">Poderes</a></li>
          <li class="active">{{$poder->nome}}</li>
      </ol>
      
      <div class="row">
          
        <div class="col-md-2 col-xs-4">
          <div class="center-img">
            <img src="{{ $poder->icone_url }}" alt="Avatar" class="img-rounded" width="100px">
          </div>
        </div>

        <div class="col-md-10 col-xs-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-align-center" aria-hidden="true"></i> Descrição:
            </div>
            <div class="panel-body">
                {{ $poder->descricao }}
            </div>
          </div>
        </div>

      </div>

      <hr/><br/>


      @foreach ($missoes as $missao)
        @include('layouts.carousel.thumbnail.thumbnail', [
          'classItem' => '',
          'titulo' => $missao->nome,
          'img' => '',
          'descricao' => $missao->descricao,
          'link' => ''
        ])
      @endforeach
        
      
    </div>
  </div>
</div>




@endsection