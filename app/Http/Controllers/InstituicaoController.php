<?php

namespace App\Http\Controllers;

use App\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verificar.usuario.admin');
    }
    
    public function index(Request $request) {
        $instituicoes = $this->listar();

        $message = $request->session()->get('message');
        $request->session()->remove('message');
            
        return view("dashboard.admin.instituicao.listar", compact('instituicoes', 'message'));
    }

    public function cadastrarForm() {
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

    private function listar() {
        return Instituicao::all(); 
    }
}
