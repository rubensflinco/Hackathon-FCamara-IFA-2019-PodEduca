@extends('layouts.default')
@section('menu', false)
@section('conteudo')
    <div class="inicio">
        <div class="centro bg-inicio">
            <div class="container centro center">
                <img class="animated white tada" src="{{ asset('img/logotipo-podeduca.png') }}" width="300px">
               
                <form method="POST" action="{{ route('login') }}">
                @csrf
                @if(!empty($message))
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @endif
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Digite seu e-mail"  name="email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="password" type="password" placeholder="Digite sua senha" name="password" required>
                    </div>

                    <span class="separacao-ou"> OU </span>

                    <input type="text" class="form-control" placeholder="Digite o PIN da turma">
                    <button type="submit" class="btn btn-podeeduca btn-lg borda-arred px-5">{{ __('Entrar >>') }}</button>
                </form>

            </div>
        </div>
    </div>
@endsection