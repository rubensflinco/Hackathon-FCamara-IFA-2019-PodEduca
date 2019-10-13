@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li class="active">Poderes</li>
          
          <a class="btn btn-warning btn-md pull-right" href="/dashboard/poder/cadastrar">Cadastrar poder</a>
          <br/><br/>
      </ol>

      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th class="text-center">Opções</th>
            </tr>
          </thead>
          @foreach ($poderes as $poder)
          <tbody>
            <tr>
              <th scope="row">{{ $poder->id }}</th>
              <td>{{ $poder->nome }}</td>
              <td class="text-center">

              <form style="display: inline" method="post" action="/dashboard/poder/editar/{{ $poder->id }}">
                @csrf
                @method('GET')
                  <button class="btn btn-warning btn-circle"><i class="fa fa-pencil" aria-hidden="true"></i></button>
              </form>
                

              <form style="display: inline" method="post" action="/dashboard/poder/remover/{{ $poder->id }}"
                onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($poder->nome)}}')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-circle"><i class="fa fa-times" aria-hidden="true"></i></button>
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