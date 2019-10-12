<?php

namespace App\Http\Controllers;

use App\Instituicao;
use Illuminate\Http\Request;
use View;

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
        $instituicao = new Instituicao();
        return view("dashboard.admin.instituicao.cadastrar", compact('instituicao', $instituicao));
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

        return redirect()->route('instituicao.listar');
    }

    public function remover($id) {
        $instituicao = Instituicao::find($id);
        $instituicao->delete();
        return redirect()->route('instituicao.listar');
    }

    public function editarForm($id) {
        $instituicao = Instituicao::find($id);
        return view('dashboard.admin.instituicao.cadastrar', compact('instituicao', $instituicao));
    }

    public function editar(Request $request, $id) {
        $instituicao = Instituicao::find($id);
        $instituicao->nome        = $request->nome;
        $instituicao->cep = $request->cep;
        $instituicao->logradouro    = $request->logradouro;
        $instituicao->numero       = $request->numero;
        $instituicao->complemento       = $request->complemento;
        $instituicao->bairro       = $request->bairro;
        $instituicao->localidade       = $request->localidade;
        $instituicao->uf       = $request->uf;
        $instituicao->save();
        return redirect()->route('instituicao.listar');
    }

    private function listar() {
        return Instituicao::all(); 
    }
}
