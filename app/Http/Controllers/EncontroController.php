<?php

namespace App\Http\Controllers;

use App\Encontro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EncontroController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        $encontros = $this->listar();
        return view("dashboard.facilitador.encontro.listar", compact('encontros', $encontros));
    }

    public function participanteEncontros(Request $request) {
        $encontros = $this->listar();

        return view("dashboard.participante.encontros", compact('encontros', 'encontros'));
    }

    public function cadastrarForm() {
        $poder = new Encontro();
        $participantes = $this->listarUserJSON();
        return view("dashboard.facilitador.encontro.criar", compact('poder', $poder), compact('participantes', $participantes));
    }

    public function cadastrar(Request $request) {
        Encontro::create([
            'facilitador_id' => $request->facilitador_id,
            'participante_id' => $request->participante_id,
            'campanha_id' => $request->campanha_id,
            'poder_id' => $request->poder_id,
            'data' => $request->data,
            'missao_id' => $request->missao_id,
            'atingiuMissao' => $request->atingiuMissao,
            'presente' => $request->presente,
        ]);

        return redirect()->route('poder.listar');
    }

    public function remover($id) {
        $Encontro = Encontro::find($id);
        $Encontro->delete();
        return redirect()->route('poder.listar');
    }

    public function editarForm($id) {
        $poder = Encontro::find($id);
        return view('dashboard.admin.encontros.cadastrar', compact('poder', $poder));
    }

    public function editar(Request $request, $id) {
        $Encontro = Encontro::find($id);
        $Encontro->facilitador_id = $request->facilitador_id;
        $Encontro->participante_id = $request->participante_id;
        $Encontro->campanha_id = $request->campanha_id;
        $Encontro->poder_id = $request->poder_id;
        $Encontro->data = $request->data;
        $Encontro->atingiuMissao = $request->atingiuMissao;
        $Encontro->presente = $request->presente;
        $Encontro->save();
        return redirect()->route('poder.listar');
    }

    public function perfil($id) {
        $poder = Encontro::find($id);
        $missoes = Missoes::where('poder_id', $id)->get();
        return view('dashboard.participante.poder', compact('poder', $poder), compact('missoes', $missoes));
    }

    private function listar() {
        return Encontro::all(); 
    }

    public function listarUserJSON() {
        return User::query()
        ->where('criador_id', Auth::user()->id)
        ->where('grupo', 'participante')
        ->get();
    }
}
