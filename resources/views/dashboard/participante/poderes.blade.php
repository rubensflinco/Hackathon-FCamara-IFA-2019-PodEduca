@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')



<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li class="active">Poderes</li>
      </ol>

      @php $idCarousel = rand(1,1000) @endphp
      @include('layouts.carousel.carousel', ['local' => 'top', 'id' => $idCarousel])

        @for ($i = 0; $i < count($poderes); $i++)

          @if ($i == 0)
            @include('layouts.carousel.thumbnail.thumbnail', [
              'classItem' => 'active',
              'titulo' => $poderes[$i]->nome,
              'img' => $poderes[$i]->icone_url,
              'descricao' => $poderes[$i]->descricao,
              'link' => '/dashboard/poder/'.$poderes[$i]->id
            ])
          @else
            @include('layouts.carousel.thumbnail.thumbnail', [
              'classItem' => '',
              'titulo' => $poderes[$i]->nome,
              'img' => $poderes[$i]->icone_url,
              'descricao' => $poderes[$i]->descricao,
              'link' => '/dashboard/poder/'.$poderes[$i]->id
            ])
          @endif


            
        @endfor

      
      @include('layouts.carousel.carousel', ['local' => 'bottom', 'id' => $idCarousel])

      
    </div>
  </div>
</div>




@endsection