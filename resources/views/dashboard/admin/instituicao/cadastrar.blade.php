@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">

                <h3>Cadastrar nova instituição</h3>
                
                <div class="col-md-6 col-md-offset-3">
                    <form method="POST" class="form form-black center-img">
                    @csrf
                    <input type="text" name="nome" id="nome" placeholder="Qual o Nome da instituição ?" class="form-control" required>
                    <input type="text" name="cep" id="cep" placeholder="Qual o CEP ?" class="form-control" required>
                    <input type="text" name="numero" id="numero" placeholder="Qual o Número ?" class="form-control" required>
                    <input type="text" name="logradouro" id="logradouro" placeholder="Qual o endereço ?" class="form-control" required>
                    <input type="text" name="complemento" id="complemento" placeholder="Qual o complemento ?" class="form-control">
                    <input type="text" name="bairro" id="bairro" placeholder="Qual o Bairro ?" class="form-control" required>
                    <input type="text" name="localidade" id="localidade" placeholder="Qual o Cidade ?" class="form-control" required>
                    <input type="text" name="uf" id="uf" placeholder="Qual o Estado ?" class="form-control" required>
                    <button type="submit" class="btn btn-podeduca btn-lg">Cadastrar >> </button>
                    </form>
                </div>

            </div>
        </div>
</div>
@endsection