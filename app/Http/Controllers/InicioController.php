<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function mostrar(){
        $grados = Grado::getGrados();

        return view('inicio', compact('grados'));
    }
}
