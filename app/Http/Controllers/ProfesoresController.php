<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function mostrarProfesores(){
     $profesores = Profesor::getProfesores(null);

     return view('profesoresHoras', compact('profesores'));
    }

    public function getProfesores(Request $post){
        $datos = $post->all();
        $profesores = Profesor::getProfesores($datos[0]);

        return response()->view('soloProfesores', compact('profesores'));
    }
}
