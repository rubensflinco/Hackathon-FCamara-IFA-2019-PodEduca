@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">
                <h3>Turmas</h3>
                <br/>

              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Opções</th>
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
                  </tr>
                </tbody>
              </table>

            </div>
        </div>
</div>
@endsection