<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if(Auth::user()->grupo == 'participante') {
            return view('dashboard.participante');
        }
        if(Auth::user()->grupo == 'facilitador') {
            return view('dashboard.facilitador');
        }
        if(Auth::user()->grupo == 'admin') {
            return view('dashboard.admin');
        }
    }
}
