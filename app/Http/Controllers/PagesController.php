<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    
    public function planificar(){
        return view('planificar');
    }

    public function historial(){
        return view('historial');
    }

    public function logAcceso(){
        return view('logAcceso');
    }

    public function gestionarUsuarios(){
        return view('gestionar-usuarios');
    }
}
