@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
        <li><a href="/">Home</a></li>
        <li class="active">Encontro</li>
        @csrf
        <a class="btn btn-warning btn-md pull-right" href="/dashboard/encontro/criar">Cadastrar encontros</a>
        <br /><br />
      </ol>

      
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Data</th>
              <th class="text-center">Opções</th>
            </tr>
          </thead>
          @foreach ($encontros as $encontro)
          <tbody>
            <tr>
              <th scope="row">{{ $encontro->id }}</th>
              <td>{{ $encontro->data }}</td>
              <td class="text-center">
                <form style="display: inline" method="post" action="/dashboard/encontro/remover/{{ $encontro->id }}"
                onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($encontro->data)}}')">
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



