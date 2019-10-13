@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')


<div class="separacao-transparente">
    <div class="row">
        <div class="container">
            <ol class="breadcrumb fundo-transparente">
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard/campanha/listar">Campanha</a></li>
                @if ($campanha->nome)
                <li class="active">Editar</li>
                @else
                <li class="active">Cadastrar</li>
                @endif

                <br /><br />
            </ol>

            <div class="col-md-6 col-md-offset-3">
                <form method="POST" class="form form-black center-img">
                    @csrf
                    <input value="{{ $campanha->nome }}" type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome da campanha">
                    <select id="userSelect" class="form-control" name="states[]" multiple="multiple">
                    </select>
                    <br/><br/>
                    <button type="submit" class="btn btn-warning btn-lg">Confirmar</button>
                </form>
            </div>

        </div>
    </div>
</div>
<script>
    let formData = new FormData();
        $.ajax({
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: formData,
            url: `/dashboard/campanha/listarUsuarios`,
            success: function(data) {
                let html = '';
                $.each(data, function(i, item) {
                    html += (`<option id="${item['id']}" value="AL">${item['name']}</option>`);
                });
                $('#userSelect').html(html);
                $('.ativeState2').select2();
                $(".ativeState2").change(function() {
                    console.log(this);
                    // alert( "Handler for .change() called." );
                });
                $('#userSelect').select2({ placeholder: "Selecione os participantes da campanha" });
            }
        });
</script>
@endsection
