<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FacilitadoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        $participantes = $this->listar();

        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view('dashboard.admin.facilitadores.listar',  compact('participantes', $participantes));
    }

    public function cadastrarForm(Request $request){
        $participante = new User();
        return view('dashboard.admin.facilitadores.criar',  compact('participante', $participante));

    }

    public function cadastrar(Request $request)
    {
        User::create([
            'name' => $request->name,
            'nick' => $request->nick,
            'grupo' => 'facilitador',
            'criador_id' => Auth::user()->id,
            'password' =>Hash::make($request->password),
            'data_nascimento' => $request->data_nascimento,
            'genero' => $request->genero,
            ]);
            return redirect()->route('facilitadores.listar');
    }

    public function remover($id) {
        $participante = User::find($id);
        $participante->delete();
        return redirect()->route('facilitadores.listar');
    }

    public function editarForm($id) {
        $participante = User::find($id);
        return view('dashboard.admin.facilitadores.criar',  compact('participante', $participante));
        // return redirect()->route('participante.listar', compact('participante', $participante));
        // return view('dashboard.facilitadores.participante.cadastrar', compact('participante', $participante));
    }

    public function editar(Request $request, $id) {
        $instituicao = User::find($id);
        $instituicao->name = $request->name;
        $instituicao->nick = $request->nick;
        $instituicao->password    = $request->password;
        $instituicao->data_nascimento       = $request->data_nascimento;
        $instituicao->genero       = $request->genero;
        $instituicao->save();
        return redirect()->route('facilitadores.listar');
    }
    
    
    private function listar() {
        return User::query()
            ->where('grupo', 'facilitador')
            ->get();  
    }
}
