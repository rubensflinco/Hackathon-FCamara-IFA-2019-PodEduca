<?php

namespace App\Http\Controllers;

use App\Missoes;
use Illuminate\Http\Request;

class MissoesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('verificar.usuario.admin');
    }
    
    public function index(Request $request) {
        $missoes = $this->listar();

        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view("dashboard.admin.missoes.listar", compact('missoes', 'message'));
    }

    public function cadastrarForm() {
        $missoes = new Missoes();
        return view("dashboard.admin.missoes.cadastrar", compact('missoes', $missoes));
    }

    public function cadastrar(Request $request) {
        Missoes::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'poder_id' => $request->poder_id,
        ]);

        return redirect()->route('missoes.listar');
    }

    public function remover($id) {
        $missoes = Missoes::find($id);
        $missoes->delete();
        return redirect()->route('missoes.listar');
    }

    public function editarForm($id) {
        $missoes = Missoes::find($id);
        return view('dashboard.admin.missoes.cadastrar', compact('missoes', $missoes));
    }

    public function editar(Request $request, $id) {
        $missoes = Missoes::find($id);
        $missoes->nome        = $request->nome;
        $missoes->descricao = $request->descricao;
        $missoes->poder_id    = $request->poder_id;
        $missoes->save();
        return redirect()->route('missoes.listar');
    }

    public function listar() {
        return Missoes::get(); 
    }

    public function listarJSON($id) {
        $teste = Missoes::where('poder_id', $id)->get();
        return $teste; 
    }
}
