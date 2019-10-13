@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
        <li><a href="/">Home</a></li>
        <li class="active">Encontro</li>

      </ol>

      <form method="POST" class="form form-black">

        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-calendar" aria-hidden="true"></i> Selecione a data em que o encontro aconteceu:
          </div>
          <div class="panel-body">
            <input type="date" class="form-control" />
          </div>
        </div>

        @php $i = 0; @endphp
        @foreach ($participantes as $participante)
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-tag" aria-hidden="true"></i> [{{$i}}] {{$participante->name}}
          </div>
          <div class="panel-body center-img">

            <div class="col-md-4">
               <select value="" id="poder{{$i}}" line="{{$i}}" name="poder" class="form-control"></select>
            </div>
            <div class="col-md-4">
              <select value="" id="missao{{$i}}" line="{{$i}}" name="missao" class="form-control" disabled></select>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><br/>
                  <input type="checkbox" id="presenca{{$i}}" name="presenca" > Confirmar presença?
                </label>
              </div>
            </div>

          </div>
        </div>
        <script>
          $(document).ready(function() {
            $("#poder{{$i}}").change(function() {
              let idPoder = $(this).val();
              let line = $(this).attr('line');
              requestMissoes(idPoder, line);
            });
          });
        </script>
        @php $i++; @endphp
        @endforeach

        <script>
          let formData = new FormData();
          $.ajax({type: 'GET',
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              body: formData,
              url: `/dashboard/poder/listarJSON`,
              success: function(data) {
                let html = `<option value="null">Selecione o Poder</option>`;
                $.each(data, function(i, item) {
                  html += `<option value="${item['id']}">${item['nome']}</option>`;
                });
                for (let index = 0; index < {{$i}}; index++) {
                  $("#poder"+index).html(html);
                }
              }
            });


            function requestMissoes(id, line) {
              $.ajax({type: 'GET',
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              body: formData,
              url: `/dashboard/missoes/listarJSON/${id}`,
              success: function(data) {
                let html = `<option value="null">Selecione a Missão</option>`;
                $.each(data, function(i, item) {
                  html += `<option value="${item['id']}">${item['nome']}</option>`;
                });
                $("#missao"+line).html(html);
                $("#missao"+line).removeAttr('disabled');
              }});
            }

        </script>


        <div class="panel panel-default">
          <div class="panel-body text-center">
              <button type="submit" class="btn btn-warning btn-lg">Confirmar</button>
          </div>
        </div>

      </form>
      
    </div>
  </div>
</div>
@endsection



