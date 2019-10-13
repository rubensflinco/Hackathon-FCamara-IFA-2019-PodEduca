<?php

namespace App\Http\Controllers;

use App\User;
use App\Poder;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($id) {
        $perfil = User::find($id);
        $poderes = Poder::all();
        if($perfil)
            return view('dashboard.perfil', compact('perfil', $perfil), compact('poderes', $poderes));
        else{
            $error = $perfil;
            return response()->view('errors', compact('error', $error) );
        }
    }



}
