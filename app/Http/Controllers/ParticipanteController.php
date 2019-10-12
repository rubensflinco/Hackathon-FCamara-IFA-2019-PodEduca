<?php

namespace App\Http\Controllers;

use App\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ParticipanteController extends Controller
{
    public function index() {
        return view('dashboard.facilitador.participante.criar');
    }

    public function cadastrar(Request $request)
    {
        Participante::create([
            'nome' => $request->nome,
            'nick' => $request->nick,
            'grupo' => 'participantes',
            'senha' =>Hash::make($request->senha),
            'data_nascimento' => $request->data_nascimento,
            'genero' => $request->genero,

            // 'cep' => $request->cep,
            // 'numero' => $request->numero,
            // 'logradouro' => $request->logradouro,
            // 'complemento' => $request->complemento,
            // 'bairro' => $request->bairro,
            // 'localidade' => $request->localidade,
            // 'uf' => $request->uf,
            ]);
            return redirect()->route('dashboard');
    }
}
