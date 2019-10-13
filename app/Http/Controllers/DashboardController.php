<?php

namespace App\Http\Controllers;

use App\Campanha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        switch (Auth::user()->grupo) {
            case 'participante':
                return view('dashboard.participante.index');
                break;
            
            case 'facilitador':
            $participantes = User::query()
            ->where('criador_id', Auth::user()->id)
            ->get()
            ->count();

            $campanha = Campanha::query()
            ->where('facilitador_id', Auth::user()->id)
            ->get()
            ->count();

            $compact = array($participantes, $campanha);
                return view('dashboard.facilitador.index', compact('compact', $compact));
                break;

            case 'admin':
                return view('dashboard.admin.index');
                break;
            
            default:
                return view('home');
                break;
        }
    }
}
