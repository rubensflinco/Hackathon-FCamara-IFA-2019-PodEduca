<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;

class TurmaController extends Controller
{
    public function index() {
        return view("turma.cadastrar");
    }

    public function cadastrar(Request $request) {
        Turma::create([
            'nome' => $request->nome,
            'codigo' => $request->codigo,
            'intituicao_id' => $request->intituicao_id,
        ]);

        return redirect()->route('dashboard');
    }
}
