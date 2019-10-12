<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                return view('dashboard.facilitador.index');
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
