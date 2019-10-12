@extends('layouts.default')
@section('menu', false)
@section('conteudo')
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <input id="email" type="email" name="email">
    <input id="password" type="password" name="password">
    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    </form>
@endsection