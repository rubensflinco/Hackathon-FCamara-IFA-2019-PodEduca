@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')



<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li class="active">Ranking</li>
          

      </ol>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Pontuação</th>
            <th class="text-center">Opções</th>
          </tr>
        </thead>
        
        <tbody>

          @foreach ($participantes as $participante)
            <tr>
              <th scope="row">{{$participante->id}}</th>
              <td>{{$participante->name}}</td>
              <td> {{rand(1,100)}} pontos </td>
              <td class="text-center">
                <a class="btn btn-info btn-circle" href="/dashboard/perfil/{{$participante->id}}"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      
    </div>
  </div>
</div>




@endsection