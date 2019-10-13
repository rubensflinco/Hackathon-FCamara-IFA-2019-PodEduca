<?php

namespace App\Http\Controllers;

use App\Encontro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function index() {
        // $usuarios = $this->listar();
        $usuarios = null;
        return view('dashboard.facilitador.encontro.listar', compact('usuarios', $usuarios));
    }

    public function listarUserJSON() {
        return User::where('criador_id', Auth::user()->id)->get();
    }
}
