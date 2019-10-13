<?php

namespace App\Http\Controllers;

use App\Participante;
use App\User;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        $participantes = $this->listar();

        return view('dashboard.participante.ranking',  compact('participantes', $participantes));
    }

    
    private function listar() {
        return User::query()
            ->where('grupo', 'participante')
            ->get();  
    }
}
