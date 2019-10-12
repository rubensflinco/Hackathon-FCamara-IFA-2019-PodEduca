<?php

namespace App\Http\Controllers;

use App\Encontro;
use Illuminate\Http\Request;

class EncontroController extends Controller
{
    public function criar() {
        Encontro::create([
            // 'nome' => $request->nome,
            // 'cep' => $request->cep,
            // 'numero' => $request->numero,
            // 'logradouro' => $request->logradouro,
            // 'complemento' => $request->complemento,
            // 'bairro' => $request->bairro,
            // 'localidade' => $request->localidade,
            // 'uf' => $request->uf,
        ]);
    }
}
