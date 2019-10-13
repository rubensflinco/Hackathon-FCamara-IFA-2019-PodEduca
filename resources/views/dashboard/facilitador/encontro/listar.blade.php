@extends('layouts.default')
@section('menu', true)
@section('dashboard', true)
@section('conteudo')

<div class="separacao-transparente">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb fundo-transparente">
        <li><a href="/">Home</a></li>
        <li class="active">q</li>
        @csrf
        <a class="btn btn-warning btn-md pull-right" href="/dashboard/campanha/criar">Cadastrar campanha</a>
        <br /><br />
      </ol>
      <div class="form-black">
        <input class="form-control" type="date">
      </div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
            <div id="jsInput"></div>
          <tr>

          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

<script>
  let formData = new FormData();
  // let missoes = `<select id="missao" name="missao" class="form-control">`;
  let missoes = '';
  let poderes = `<select id="poderes" name="poderes" class="form-control" onChange="monitoraSelect()">`;
  let usuarios = '';
  // $.ajax({
  //   type: 'GET',
  //   headers: {
  //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   },
  //   body: formData,
  //   url: `/dashboard/missoes/listarJSON`,
  //   success: function(data) {
  //     console.log(data);
  //     $.each(data, function(i, item) {
  //         missoes += (`<option class="" id="${item['id']}" value="${item['id']}">${item['nome']}</option>`);
  //     });
  //     $('#missoes').html(missoes);
  //     // alert( "Handler for .change() called." );
  //   }
  // });

  $.ajax({
    type: 'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    body: formData,
    url: `/dashboard/poder/listarJSON`,
    success: function(data) {
      console.log(data);
      $.each(data, function(i, item) {
        poderes += (`<option class="" id="${item['id']}poder" value="${item['id']}">${item['nome']}</option>`);
      });
      poderes += '</select>';
      // alert( "Handler for .change() called." );
    }
  });

  $.ajax({
    type: 'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    body: formData,
    url: `/dashboard/encontro/listarUserJSON`,
    success: function(data) {
      console.log(data);
      $.each(data, function(i, item) {
        let aux = `<tr>
          <td>${item['id']}</td>
          <td>${item['name']}</td>
          <td><div class="form-black">${poderes}</div></td>
          <td><div class="form-black"><select id="${item['id']}" name="missao" class="form-control adicionar-options"><option>Selecione uma missão</option></select></div></td>
          </tr>`
          $('#jsInput').append(aux);
          // missoes += (`<option id="${item['id']}" value="${item['id']}">${item['nome']}</option>`);
      });
      // alert( "Handler for .change() called." );
    }
  });

  function monitoraSelect() {
    let idInventor = $("#poderes").val();
    $.ajax({
    type: 'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    body: formData,
    url: `/dashboard/missoes/listarJSON/${idInventor}`,
    success: function(data) {
      console.log(data);
      $.each(data, function(i, item) {
        // var opt = document.createElement('option');
        // opt.value = item['id'];
        // opt.id = item['id'];
        // opt.innerHTML = item['nome'];
        // document.querySelector('#missoes').appendChild(opt);
        // $('#missoes').append(opt);
        var select = document.getElementById(`${idInventor}poder`).parentElement;
        console.log(select);
        select.append(`<option id="${item['id']}" value="${item['id']}">${item['nome']}</option>`);

          // missoes += (`<option class="" id="${item['id']}" value="${item['id']}">${item['nome']}</option>`);
      });
      // $('#missoes').append(missoes);
      // alert( "Handler for .change() called." );
    }
  });
  }

  $('#poderes').on('change', function() {
    alert( this.value );

    
  });
  
</script>
@endsection