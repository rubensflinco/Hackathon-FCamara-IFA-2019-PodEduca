@extends('layouts.default')
@section('menu', false)
@section('conteudo')
    <div class="inicio">
        <div class="centro bg-inicio">
            <div class="container centro center">
                <img class="animated white tada" src="{{ asset('img/logotipo-podeduca.png') }}" width="300px">
                <p class="animated white tada white">Falaa devv</p>
                <button onclick="abrirForm()" class="btn btn-podeeduca btn-lg borda-arred px-5 white">Entrar</button>
                <span class="separacao-ou"> OU </span>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" placeholder="Digite o PIN da turma">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="form" class="form form-login">
        <a href="#" class="sair" onclick="fecharForm()">&times;</a>
        <form method="POST" action="{{ route('login') }}">
        @csrf
        @if(!empty($message))
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @endif
            <div class="form-group">
                <label>Digite seu E-mail:</label>
                <input class="form-control" id="email" type="email" placeholder="Digite seu e-mail"  name="email">
            </div>
            <div class="form-group">
                <label>Digite seu E-mail:</label>
                <input class="form-control" id="password" type="password" placeholder="Digite seu e-mail" name="password">
            </div>
            <button type="submit" class="btn btn-primary btn-lg borda-arred px-5">{{ __('Login') }}</button>
        </form>
    </div>
@endsection