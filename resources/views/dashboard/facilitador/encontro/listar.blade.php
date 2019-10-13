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
            <th class="text-center">Opções</th>
          </tr>
        </thead>
        @foreach ($campanhas as $campanha)
        <tbody>
          <tr>
            <th scope="row">{{ $campanha->id }}</th>
            <td>{{ $campanha->nome }}</td>
            <td class="text-center">
              <!-- <form style="display: inline" method="post" action="/dashboard/campanha/editar/{{ $campanha->id }}">
              @csrf
              @method('GET')
                    <button class="btn btn-warning btn-circle">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </button>
            </form> -->
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
        @endforeach
      </table>

      
    </div>
  </div>
</div>
@endsection



