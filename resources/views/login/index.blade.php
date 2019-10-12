@extends('layouts.default')
@section('menu', false)
@section('conteudo')
<div class="inicio">
    <div class="centro bg-inicio">
        <div class="container centro center">
            <img class="animated pulse" src="{{ asset('img/logotipo-podeduca-branco.png') }}" width="300px">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if(!empty($message))
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @endif
                <div class="animated fadeInDown form-group">
                    <input class="form-control" id="nick" type="text" placeholder="Digite o seu nick" name="nick" required>
                </div>
                <div class="animated fadeInDown delay-3 form-group">
                    <input class="form-control" id="password" type="password" placeholder="Digite a sua senha" name="password" required>
                </div>

                <button type="submit" class="animated fadeInDown delay-4 btn btn-podeeduca btn-lg borda-arred px-5">{{ __('Entrar') }}</button>
            </form>

        </div>
    </div>
</div>
@endsection