@extends('layouts.default')
@section('menu', false)
@section('conteudo')
<div class="inicio">
    <div class="centro bg-inicio">
        <div class="container centro center">
            <img src="{{ asset('img/logotipo-podeduca-branco.png') }}" width="300px">

            <h1 class="text-white animated tada">{{ $error }}</h1>
            @switch($error)
                @case("404")
                    <p class="text-white">Desculpe, mas essa página não está disponivel!</p>
                    @break
                @default
                    <p class="text-white">Desculpe, mas todos nós erramos!</p>
            @endswitch

            <hr/>
            <a href="/" class="btn btn-default btn-lg">Ir para pagina Inicial</a>

        </div>
    </div>
</div>

@endsection