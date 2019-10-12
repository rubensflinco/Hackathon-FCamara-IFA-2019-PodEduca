<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Turma;

class TurmaController extends Controller
{
    public function index(Request $request) {
        $turmas = $this->listar();

        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view("dashboard.facilitador.turmas.listar", compact('turmas', 'message'));
    }

    public function cadastrarForm(Request $request) {

        return view("dashboard.facilitador.turmas.cadastrar");
    }

    public function cadastrar(Request $request) {
        Turma::create([
            'nome' => $request->nome,
            'codigo' => $request->codigo,
            'intituicao_id' => $request->intituicao_id,
            'facilitador_id' => $request->facilitador_id,
        ]);

        return redirect()->route('dashboard');
    }

    private function listar() {
        return Turma::query()
            ->where('facilitador_id', Auth::user()->id)
            ->get();  
    }
}
