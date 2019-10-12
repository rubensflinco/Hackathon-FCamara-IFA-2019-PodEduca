<?php

namespace App\Http\Controllers;

use App\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function index() {
        return view("dashboard.admin.instituicao.cadastrar");
    }

    public function cadastrar(Request $request) {
        Instituicao::create([
            'nome' => $request->nome,
            'cep' => $request->cep,
            'numero' => $request->numero,
            'logradouro' => $request->logradouro,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'localidade' => $request->localidade,
            'uf' => $request->uf,
        ]);

        return redirect()->route('dashboard');
    }
}
