<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LancamentoHorasController extends Controller
{
    public function index() {

        return view('dashboard.facilitador.presenca.lancar');
    }
}
