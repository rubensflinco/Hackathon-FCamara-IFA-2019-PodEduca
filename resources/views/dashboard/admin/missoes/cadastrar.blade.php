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
                <textarea name="descricao" id="descricao" placeholder="Digite a descrição ?" class="form-control" required>{{ $missoes->descricao }}</textarea>          
                
                <select value="{{ $missoes->poder_id }}"  name="poder_id" id="poder_id" class="js-states form-control" required>
                    <option value="null">Selecione um poder</option>
                    @foreach ($poderes as $poder)
                      @if ($missoes->poder_id == $poder->id)
                        <option value="{{$poder->id}}" selected>{{$poder->nome}}</option>
                      @else
                        <option value="{{$poder->id}}">{{$poder->nome}}</option>
                      @endif
                    @endforeach
                </select>

                <br/>
                <button type="submit" class="btn btn-warning btn-lg">Confirmar</button>
            </form>
        </div>
      
    </div>
  </div>
</div>
@endsection
