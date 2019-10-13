@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li><a href="/dashboard/missoes/listar">Missões</a></li>
          @if ($missoes->nome)
            <li class="active">Editar</li>
          @else
            <li class="active">Cadastrar</li>
          @endif
          
          <br/><br/>
      </ol>

      <div class="col-md-6 col-md-offset-3">
            <form method="POST" class="form form-black center-img">
                @csrf
                <input value="{{ $missoes->nome }}" type="text" name="nome" id="nome" placeholder="Qual o Nome da missão ?" class="form-control" required>
                <input value="{{ $missoes->descricao }}"  type="text" name="descricao" id="descricao" placeholder="Qual o descrição ?" class="form-control" required>
                <input value="{{ $missoes->poder_id }}"  type="text" name="poder_id" id="poder_id" placeholder="Qual o id do poder ?" class="form-control" required>                
                <br/>
                <button type="submit" class="btn btn-warning btn-lg">Cadastrar</button>
            </form>
        </div>
      
    </div>
  </div>
</div>
@endsection
