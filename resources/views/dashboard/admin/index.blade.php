@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">

                <h3>Admin</h3>

                <p>Olá {{@Auth::user()->name}}, seja bem vindo!!!</p>

            </div>
        </div>
</div>
@endsection