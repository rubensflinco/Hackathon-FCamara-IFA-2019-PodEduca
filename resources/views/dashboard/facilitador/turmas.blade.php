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
                  @switch(Auth::user()->grupo)
                    @case("facilitador")
                      <th>#</th>
                      <th>Nome</th>
                      <th>Opções</th>
                      @break
                    @case("admin")
                      <th>#</th>
                      <th>Turmas</th>
                      <th>Opções</th>
                      <th>Facilitador</th>
                      @break
                    @endswitch
                  </tr>
                </thead>
                <tbody>
                  @switch(Auth::user()->grupo)
                    @case("facilitador")
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>
                          <a class="btn btn-info btn-circle"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                          <a class="btn btn-warning btn-circle"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          <a class="btn btn-danger btn-circle"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                      @break

                    @case("admin")
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
                      @break
                    @default

                    @endswitch
                </tbody>
              </table>

            </div>
        </div>
</div>
@endsection