@extends('layouts.default')
@section('menu', false)
@section('conteudo')
    <div class="inicio">
        <div class="centro bg-inicio">
            <div class="container centro center">
                <h1 class="animated white tada">PodEduca</h1>
                <p class="white">...</p>
                <button onclick="abrirForm()" class="btn btn-primary btn-lg borda-arred px-5 white">Entrar</button>
                <button class="btn btn-light btn-lg borda-arred px-5 margin">Entrar com um PIN</button>
            </div>
        </div>
    </div>

    <div id="form" class="form">
        <a href="#" class="sair" onclick="fecharForm()">&times;</a>
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-group">
                <label>Digite seu E-mail:</label>
                <input class="form-control" id="email" type="email" placeholder="Digite seu e-mail"  name="email">
            </div>
            <div class="form-group">
                <label>Digite seu E-mail:</label>
                <input class="form-control" id="password" type="password" placeholder="Digite seu e-mail" name="password">
            </div>
            <button type="submit" class="btn btn-primary btn-lg borda-arred px-5">
                                        {{ __('Login') }}
                                    </button>  
        </form>
    </div>

    <!-- <form method="POST" action="{{ route('login') }}">
    
    <input id="email" type="email" name="email">
    <input id="password" type="password" name="password">
    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    </form> -->
@endsection