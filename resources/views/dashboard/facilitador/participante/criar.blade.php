@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li><a href="/dashboard/participante/listar">Participantes</a></li>
          @if ($participante->nome)
            <li class="active">Editar</li>
          @else
            <li class="active">Cadastrar</li>
          @endif
          
          <br/><br/>
      </ol>

      <div class="col-md-6 col-md-offset-3">
            <form method="POST" class="form form-black center-img">
                @csrf
                <input value="{{ $participante->nome }}" type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome">
                <input value="{{ $participante->nick }}" type="text" name="nick" id="nick" class="form-control" placeholder="Digite o nick">
                <select value="{{ $participante->genero }}" id="genero" name="genero" class="form-control">
                    <option value="null">Digite genero</option>
                    <option value="masculino">Masculino</option>
                    <option value="ferminino">Feminino</option>
                </select>
                <p class="text-left margin-dt">Data de Nascimento:</p>
                <input value="{{ $participante->date }}" type="date" name="data_nascimento" id="data_nascimento" class="form-control">
                <input value="{{ $participante->password }}" type="password" name="senha" id="senha" class="form-control" placeholder="Digite a senha">
                <br/>
                <button type="submit" class="btn btn-warning btn-lg">Cadastrar</button>
            </form>
        </div>
      
    </div>
  </div>
</div>
@endsection


<!-- <form method="post">
@csrf
    <label>Nome</label>
    <input value="{{ $participante->nome }}" type="text" name="nome" id="nome">
    <label>Nick</label>
    <input value="{{ $participante->nick }}" type="text" name="nick" id="nick">
    <label>Genero</label>
    <select value="{{ $participante->genero }}" id="genero" name="genero">
        <option value="masculino">Masculino</option>
        <option value="ferminino">Feminino</option>
    </select>
        <label>Data de nascimento</label>
        <input value="{{ $participante->date }}" type="date" name="data_nascimento" id="data_nascimento">
        <label>senha</label>
        <input value="{{ $participante->password }}" type="password" name="senha" id="senha">
    <button type="submit">Cadastrar</button>
</form> -->