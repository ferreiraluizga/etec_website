<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('index', compact('eventos'));
    }

    public function contato()
    {
        var_dump($_GET);
        return view('contatos');
    }
}
