@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">
                <h3>Participantes</h3>
                <br/>
              <a href="/dashboard/participante/criar">Cadastrar participante</a>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Nick</th>
                    <th>Opções</th>
                  </tr>
                </thead>
                @foreach ($participantes as $participante)
                <tbody>
                  <tr>
                    <th scope="row">{{ $participante->id }}</th>
                    <td>{{ $participante->nome }}</td>
                    <td>{{ $participante->nick }}</td>
                    <td>
                      <a class="btn btn-info btn-circle"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                      <form style="display: inline" method="post" action="/dashboard/participante/editar/{{ $participante->id }}">
                      @csrf
                      @method('GET')
                            <button class="btn btn-circle btn-circle">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                    </form>
                      <form style="display: inline" method="post" action="/dashboard/participante/remover/{{ $participante->id }}"
                      onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($participante->nome)}}')">
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