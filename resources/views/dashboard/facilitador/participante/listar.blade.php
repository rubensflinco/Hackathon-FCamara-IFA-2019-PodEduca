@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li class="active">Participantes</li>
          
          <a class="btn btn-warning btn-md pull-right" href="/dashboard/participante/criar">Cadastrar participante</a>
          <br/><br/>
      </ol>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Nick</th>
            <th class="text-center">Opções</th>
          </tr>
        </thead>
        @foreach ($participantes as $participante)
        <tbody>
          <tr>
            <th scope="row">{{ $participante->id }}</th>
            <td>{{ $participante->name }}</td>
            <td>{{ $participante->nick }}</td>
            <td class="text-center">
              <form style="display: inline" method="post" action="/dashboard/participante/editar/{{ $participante->id }}">
              @csrf
              @method('GET')
                    <button class="btn btn-warning btn-circle">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </button>
            </form>
              <form style="display: inline" method="post" action="/dashboard/participante/remover/{{ $participante->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($participante->name)}}')">
              @csrf
              @method('DELETE')
                    <button class="btn btn-danger btn-circle">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
            </form>
          </td>
          </tr>
        </tbody>
        @endforeach
      </table>

      
    </div>
  </div>
</div>
@endsection


