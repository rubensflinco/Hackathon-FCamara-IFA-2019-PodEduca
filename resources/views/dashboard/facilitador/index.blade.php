@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">

                    <center>
                            <h3>Olá {{@Auth::user()->name}}, tudo bem ?</h3>
                            <br/>
                        </center>
                      
                              <div class="panel">
                                <div class="panel-heading">
                                  <div class="container">
                                    <h4><b>
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        Turmas
                                      </b></h4>
                                    <center>
                                      <hr>
                                      <p>Você tem: {NUMERO_DE_TURMAS}</p>
                                    </center>
                                  </div>
                                </div>
                              </div>
                      
    
            </div>
        </div>
</div>
@endsection