<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($id) {
        $perfil = User::find($id);
        if($perfil)
            return view('dashboard.perfil', compact('perfil', $perfil));
        else{
            $error = $perfil;
            return response()->view('errors', compact('error', $error) );
        }
    }

}
