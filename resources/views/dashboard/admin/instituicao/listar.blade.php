@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">
                <h3>Instituições</h3>
                <br/>
              <a href="/dashboard/instituicao/cadastrar">Cadastrar instituição</a>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th>Opções</th>
                  </tr>
                </thead>
                @foreach ($instituicoes as $instituicao)
                <tbody>
                  <tr>
                    <th scope="row">{{ $instituicao->id }}</th>
                    <td>{{ $instituicao->nome }}</td>
                    <td>{{ $instituicao->localidade }}</td>
                    <td>
                      <a class="btn btn-info btn-circle"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                      <form style="display: inline" method="post" action="/dashboard/instituicao/editar/{{ $instituicao->id }}">
                      @csrf
                      @method('GET')
                            <button class="btn btn-circle btn-circle">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                    </form>
                      
                      
                      <form style="display: inline" method="post" action="/dashboard/instituicao/remover/{{ $instituicao->id }}"
                      onsubmit="return confirm('Tem certeza que deseja remover {{addslashes($instituicao->nome)}}')">
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