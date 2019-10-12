@extends('layouts.default')
@section('menu', true)
@section('conteudo')

<div class="separacao-transparente">
        <div class="row">
            <div class="container">
                <h3>Turmas</h3>
                <br/>
                <input type="date" value="<?php echo date('Y-m-d'); ?>">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome do participante</th>
                    <th>Presente?</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>
                    <input type="checkbox" name="" value="">
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
        </div>
</div>
@endsection