@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li><a href="/dashboard/poder/listar">Poderes</a></li>
          @if ($poder->nome)
            <li class="active">Editar</li>
          @else
            <li class="active">Cadastrar</li>
          @endif
          
          <br/><br/>
      </ol>

      <div class="col-md-6 col-md-offset-3">
            <form method="POST" class="form form-black center-img">
                @csrf
                <input value="{{ $poder->nome }}" type="text" name="nome" id="nome" placeholder="Qual o nome do poder ?" class="form-control" required>
                <textarea name="descricao" id="descricao" rows="4" cols="50" placeholder="Digite a descrição ?" class="form-control" required>{{ $poder->descricao }}</textarea>
                <input value="{{ $poder->icone_url }}"  type="url" name="icone_url" id="icone_url" placeholder="Digite o link da imagem" class="form-control" required>
                <br/>
                <button type="submit" class="btn btn-warning btn-lg">Confirmar</button>
            </form>
        </div>
      
    </div>
  </div>
</div>
@endsection