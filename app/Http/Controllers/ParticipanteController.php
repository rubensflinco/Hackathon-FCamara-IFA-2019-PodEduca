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

        return view('dashboard.facilitador.participante.listar',  compact('participantes', $participantes));
    }

    public function cadastrarForm(Request $request){
        $participante = new Participante();
        return view('dashboard.facilitador.participante.criar',  compact('participante', $participante));

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
            // participante.cadastrar
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

    public function remover($id) {
        $participante = Participante::find($id);
        $participante->delete();
        return redirect()->route('participante.listar');
    }

    public function editarForm($id) {
        $participante = Participante::find($id);
        return view('dashboard.facilitador.participante.criar',  compact('participante', $participante));
        // return redirect()->route('participante.listar', compact('participante', $participante));
        // return view('dashboard.facilitadores.participante.cadastrar', compact('participante', $participante));
    }

    public function editar(Request $request, $id) {
        $instituicao = Participante::find($id);
        $instituicao->nome        = $request->nome;
        $instituicao->nick = $request->nick;
        $instituicao->senha    = $request->senha;
        $instituicao->data_nascimento       = $request->data_nascimento;
        $instituicao->genero       = $request->genero;
        $instituicao->grupo       = 'participantes';
        $instituicao->save();
        return redirect()->route('participante.listar');
    }
    
    
    private function listar() {
        return Participante::query()
            ->where('facilitador_id', Auth::user()->id)
            ->get();  
    }
}
