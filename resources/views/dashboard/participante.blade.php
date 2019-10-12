@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">

                    <center>
                        <h3>Olá {NOME}, tudo bem ?</h3>
                        <br/>
                    </center>
                  
                          <div class="panel">
                            <div class="panel-heading">
                              <div class="container">
                                <h4><b>
                                    <i class="fa fa-level-up" aria-hidden="true"></i>
                                    Rank
                                  </b></h4>
                                <center>
                                  <hr>
                                  <p>Seu rank atual na sua turma é: 0</p>
                                </center>
                              </div>
                            </div>
                          </div>
                  

            </div>
        </div>
</div>
@endsection