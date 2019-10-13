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
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-trophy" aria-hidden="true"></i> Ranking:
            </div>
            <div class="panel-body">
                {Numero da posição}
            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-gamepad" aria-hidden="true"></i> Pontos:
            </div>
            <div class="panel-body">
                {Numero da posição}
            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-flag-checkered" aria-hidden="true"></i> Missões:
            </div>
            <div class="panel-body">
                {Numero da posição}
            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-fire" aria-hidden="true"></i> Poder:
            </div>
            <div class="panel-body">
                {Numero da posição}
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
          'descricao' => 'Quem tem o porder se vira sozinho sabe que as pessoas donas de si querem abrir seus próprios caminhos, dar seus proprios... LEIA MAIS'
        ])
        

        @include('layouts.carousel.thumbnail.thumbnail', [
          'classItem' => ' ',
          'titulo' => '',
          'img' => asset('img/ifa-artes/poderes/Cards_frente-02.jpg'),
          'descricao' => 'Quem tem o poder do líder sabe respeitar, estimular e motivar as pessoas e por isso é respeitado e admirado por todos. LEIA MAIS'
        ])
      
      @include('layouts.carousel.carousel', ['local' => 'bottom', 'id' => $idCarousel])

      
    </div>
  </div>
</div>
@endsection