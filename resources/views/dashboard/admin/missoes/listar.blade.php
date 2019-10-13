@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li class="active">Missoes</li>
          
          <a class="btn btn-warning btn-md pull-right" href="/dashboard/missoes/cadastrar">Cadastrar Missão</a>
          <br/><br/>
      </ol>

      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Missão</th>
              <th>Descrição</th>
              <th class="text-center">Opções</th>
            </tr>
          </thead>
          @foreach ($missoes as $missao)
          <tbody>
            <tr>
              <th scope="row">{{ $missao->id }}</th>
              <td>{{ $missao->nome }}</td>
              <td>{{ substr($missao->descricao, 0, 90) }}</td>
              <td class="text-center">

              <form style="display: inline" method="post" action="/dashboard/missoes/editar/{{ $missao->id }}">
                @csrf
                @method('GET')
                  <button class="btn btn-warning btn-circle"><i class="fa fa-pencil" aria-hidden="true"></i></button>
              </form>
                

              <form style="display: inline" method="post" action="/dashboard/missoes/remover/{{ $missao->id }}"
                onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($missao->nome)}}')">
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