<?php

namespace App\Http\Controllers;

use App\Participante;
use App\User;
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
        $participante = new User();
        return view('dashboard.facilitador.participante.criar',  compact('participante', $participante));

    }

    public function cadastrar(Request $request)
    {
        User::create([
            'name' => $request->name,
            'nick' => $request->nick,
            'grupo' => 'participante',
            'criador_id' => Auth::user()->id,
            'password' =>Hash::make($request->password),
            'data_nascimento' => $request->data_nascimento,
            'genero' => $request->genero,
            ]);
            return redirect()->route('participante.listar');
    }

    public function remover($id) {
        $participante = User::find($id);
        $participante->delete();
        return redirect()->route('participante.listar');
    }

    public function editarForm($id) {
        $participante = User::find($id);
        return view('dashboard.facilitador.participante.criar',  compact('participante', $participante));
        // return redirect()->route('participante.listar', compact('participante', $participante));
        // return view('dashboard.facilitadores.participante.cadastrar', compact('participante', $participante));
    }

    public function editar(Request $request, $id) {
        $instituicao = User::find($id);
        $instituicao->name        = $request->name;
        $instituicao->nick = $request->nick;
        $instituicao->password    = $request->password;
        $instituicao->data_nascimento       = $request->data_nascimento;
        $instituicao->genero       = $request->genero;
        $instituicao->save();
        return redirect()->route('participante.listar');
    }
    
    
    private function listar() {
        return User::query()
            ->where('criador_id', Auth::user()->id)
            ->get();  
    }
}
