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
                {{ $perfil->name }}
            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-group" aria-hidden="true"></i> Grupo:
            </div>
            <div class="panel-body">
                {{ $perfil->grupo }}
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

      <hr/><br/>

      @php $idCarousel = rand(1,1000) @endphp
      @include('layouts.carousel.carousel', ['local' => 'top', 'id' => $idCarousel])

        @include('layouts.carousel.thumbnail.thumbnail', [
          'classItem' => 'active',
          'titulo' => '',
          'img' => asset('img/ifa-artes/poderes/Cards_frente-01.jpg'),
          'descricao' => 'Quem tem o porder se vira sozinho sabe que as pessoas donas de si querem abrir seus próprios caminhos, dar seus proprios... LEIA MAIS',
          'link' => '/dashboard/poder/1'
        ])
        

        @include('layouts.carousel.thumbnail.thumbnail', [
          'classItem' => ' ',
          'titulo' => '',
          'img' => asset('img/ifa-artes/poderes/Cards_frente-02.jpg'),
          'descricao' => 'Quem tem o poder do líder sabe respeitar, estimular e motivar as pessoas e por isso é respeitado e admirado por todos. LEIA MAIS',
          'link' => '/dashboard/poder/2'
        ])
      
      @include('layouts.carousel.carousel', ['local' => 'bottom', 'id' => $idCarousel])
      
    </div>
  </div>
</div>
@endsection