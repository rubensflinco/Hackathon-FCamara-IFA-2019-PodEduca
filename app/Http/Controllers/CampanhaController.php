<?php

namespace App\Http\Controllers;

use App\Campanha;
use App\User;
use App\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampanhaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verificar.usuario.facilitador');
    }
    
    public function index(Request $request) {
        //$campanha = $this->listar();
        $campanha = new Campanha();
        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view("dashboard.facilitador.campanha.listar", compact('campanha', 'message'));
    }

    public function cadastrarForm() {
        $campanha = new Campanha();
        return view("dashboard.facilitador.campanha.criar", compact('campanha', $campanha));
    }

    public function cadastrar(Request $request) {
        // Campanha::create([
        //     'nome' => $request->nome,
        //     'participante_id' => $request->participante_id,
        // ]);
            echo $request->participantes;
        // return redirect()->route('instituicao.listar');
    }

    public function remover($id) {
        $instituicao = Campanha::find($id);
        $instituicao->delete();
        return redirect()->route('instituicao.listar');
    }

    public function editarForm($id) {
        $instituicao = Campanha::find($id);
        return view('dashboard.facilitador.campanha.criar', compact('instituicao', $instituicao));
    }

    public function editar(Request $request, $id) {
        $instituicao = Campanha::find($id);
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
        return Campanha::where('facilitador_id', Auth::user()->id); 
    }

    public function listarParticipantes() {
        return User::where('criador_id', Auth::user()->id)->get(); 
    }
}
