@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
          <li><a href="/">Home</a></li>
          <li class="active"></li>
          
          <a class="btn btn-warning btn-md pull-right" href="/dashboard/campanha/criar">Cadastrar campanha</a>
          <br/><br/>
      </ol>
      <div class="form-black">
          <input class="form-control" type="date">
        </div>
        <table class="table table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">
          </td>
          </tr>
        </tbody>
      </table>

      
    </div>
  </div>
</div>
@endsection



