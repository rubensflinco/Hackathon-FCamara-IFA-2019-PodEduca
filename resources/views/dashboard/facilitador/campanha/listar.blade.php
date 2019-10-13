@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li class="active">Campanha</li>
          
          <a class="btn btn-warning btn-md pull-right" href="/dashboard/campanha/criar">Cadastrar campanha</a>
          <br/><br/>
      </ol>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Nome</th>
            <th class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $campanha->id }}</th>
            <td>{{ $campanha->nome }}</td>
            <td class="text-center">
              <form style="display: inline" method="post" action="/dashboard/campanha/editar/{{ $campanha->id }}">
              @csrf
              @method('GET')
                    <button class="btn btn-warning btn-circle">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </button>
            </form>
              <form style="display: inline" method="post" action="/dashboard/campanha/remover/{{ $campanha->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($campanha->nome)}}')">
              @csrf
              @method('DELETE')
                    <button class="btn btn-danger btn-circle">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
            </form>
          </td>
          </tr>
        </tbody>
      </table>

      
    </div>
  </div>
</div>
@endsection


@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li><a href="/dashboard/campanha/listar">Campanha</a></li>
          @if ($campanha->nome)
            <li class="active">Editar</li>
          @else
            <li class="active">Cadastrar</li>
          @endif
          
          <br/><br/>
      </ol>

      <div class="col-md-6 col-md-offset-3">
            <form method="POST" class="form form-black center-img">
                @csrf
                <input value="{{ $campanha->name }}" type="text" name="name" id="name" class="form-control" placeholder="Digite o nome">
                <input value="{{ $campanha->nick }}" type="text" name="nick" id="nick" class="form-control" placeholder="Digite o nick">
                <select value="{{ $campanha->genero }}" id="genero" name="genero" class="form-control">
                    <option value="null">Digite genero</option>
                    <option value="masculino">Masculino</option>
                    <option value="ferminino">Feminino</option>
                </select>
                <p class="text-left margin-dt">Data de Nascimento:</p>
                <input value="{{ $campanha->date }}" type="date" name="data_nascimento" id="data_nascimento" class="form-control">
                <input value="{{ $campanha->password }}" type="password" name="password" id="password" class="form-control" placeholder="Digite a senha">
                <br/>
                <button type="submit" class="btn btn-warning btn-lg">Cadastrar</button>
            </form>
        </div>
      
    </div>
  </div>
</div>
@endsection


