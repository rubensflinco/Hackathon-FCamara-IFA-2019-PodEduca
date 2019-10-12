@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">

                    <center>
                            <h3>Olá {{@Auth::user()->name}}, tudo bem ?</h3>
                            <br/>
                        </center>
                      
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="container">
                        <h4><b>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Turmas
                          </b></h4>
                        <center>
                          <hr>
                          <p>Você tem: {NUMERO_DE_TURMAS}</p>
                        </center>
                      </div>
                    </div>
                  </div>

                  @php $idCarousel = rand(1,1000) @endphp
                  @include('layouts.carousel.carousel', ['local' => 'top', 'id' => $idCarousel])

                    @include('layouts.carousel.thumbnail.thumbnail', [
                      'classItem' => 'active',
                      'titulo' => 'Test1',
                      'img' => 'https://img.onesignal.com/t/249c9781-ba49-499e-a5be-c799240aa800.png',
                      'descricao' => 'Olá'
                    ])
                    

                    @include('layouts.carousel.thumbnail.thumbnail', [
                      'classItem' => ' ',
                      'titulo' => 'Test2',
                      'img' => 'https://img.onesignal.com/t/249c9781-ba49-499e-a5be-c799240aa800.png',
                      'descricao' => 'Olá'
                    ])
                  
                  @include('layouts.carousel.carousel', ['local' => 'bottom', 'id' => $idCarousel])

                  <a href="{{ route('instituicao.cadastrar') }}" >
                    Cad Inst
                  </a>
                      
    
            </div>
        </div>
</div>
@endsection