@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">

                <h3>Facilitador</h3>
                <a href="{{ route('instituicao.cadastrar') }}" >
    Cad Inst
</a>
            </div>
        </div>
</div>
@endsection
