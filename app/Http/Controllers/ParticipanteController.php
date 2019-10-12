<?php

namespace App\Http\Controllers;

use App\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ParticipanteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        $participantes = $this->listar();

        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view('dashboard.facilitador.participante.listar', compact('participantes', 'message'));
    }

    public function cadastrar(Request $request)
    {
        Participante::create([
            'nome' => $request->nome,
            'nick' => $request->nick,
            'grupo' => 'participantes',
            'facilitador_id' => Auth::user()->id,
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
    
    private function listar() {
        return Participante::query()
            ->where('facilitador_id', Auth::user()->id)
            ->get();  
    }
}
