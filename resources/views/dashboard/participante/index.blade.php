@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">
                  <div class="perfil">
                    <img src="https://zdnet4.cbsistatic.com/hub/i/r/2017/03/06/a4a5bb7b-7a1d-4f2d-8be2-a78455e8f749/resize/1200x900/9584580a6d94305113961f57d4421745/github-logo-silhouette-in-a-square318-54633.jpg" class="perfil" alt="img_perfil">
                    <h3>Olá {{@Auth::user()->name}}, tudo bem ?</h3>      
                  </div>
                  
                    <div class="painel">
                      <h3>Acompanhe seu dados:</h3>
                      <div>
                        <p><b>Seus Pontos:</b> {Numero de pontos}</p>
                        <p><b>A sua posição no hanking da turma:</b> {Numero da posição}</p>
                        <p><b>Os seus poderes:</b></p>
                        <div class="container" style="display: flex">
                            <div class="card">
                              <img class="card-img-top" src="https://static6.depositphotos.com/1025854/540/v/950/depositphotos_5404706-stock-illustration-human-brain-comics-drawing.jpg" width="100%" alt="Imagem de capa do card">
                              <div class="card-body">
                                <p class="card-text">Inteligência</p>
                              </div>
                            </div>
                            <div class="card hidden-xs">
                              <img class="card-img-top" src="https://static6.depositphotos.com/1025854/540/v/950/depositphotos_5404706-stock-illustration-human-brain-comics-drawing.jpg" width="100%" alt="Imagem de capa do card">
                              <div class="card-body">
                                <p class="card-text">Inteligência</p>
                              </div>
                            </div>
                            <div class="card hidden-xs">
                              <img class="card-img-top" src="https://static6.depositphotos.com/1025854/540/v/950/depositphotos_5404706-stock-illustration-human-brain-comics-drawing.jpg" width="100%" alt="Imagem de capa do card">
                              <div class="card-body">
                                <p class="card-text">Inteligência</p>
                              </div>
                            </div> 
                            <div class="card hidden-xs">
                              <img class="card-img-top" src="https://static6.depositphotos.com/1025854/540/v/950/depositphotos_5404706-stock-illustration-human-brain-comics-drawing.jpg" width="100%" alt="Imagem de capa do card">
                              <div class="card-body">
                                <p class="card-text">Inteligência</p>
                              </div>
                            </div>                  
                        </div>
                      </div>
                    </div>
                    <!-- <div class="panel">
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
                          </div> -->
                
            </div>
        </div>
</div>
@endsection