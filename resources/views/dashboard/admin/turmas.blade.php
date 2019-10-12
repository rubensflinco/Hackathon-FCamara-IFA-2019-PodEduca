@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
    <div class="row">
        <div class="container">
            <div class="separador">
                <label for="criarTurma">Criar Nova turma:</label>
                <button class="btn btn-primary">Criar nova turma +</button>
            </div>
            <table class="table">
                <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Turma</th>
                  <th scope="col">Ações</th>
                  <th scope="col">Facilitador</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>
                      <a class="btn btn-info btn-circle"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                      <a class="btn btn-warning btn-circle"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a class="btn btn-danger btn-circle"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                    <td>{Nome do Facilitador} <a href="#" class=" btn fa fa-pencil"></a></td>
                </tr>
              </tbody>
            </table>

        </div>
    </div>
</div>

@endsection