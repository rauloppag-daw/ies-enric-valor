<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Ciclo;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function mostrarAlumnos(){
        $alumnos = Alumno::getAlumnos(null);
        $ciclos = Ciclo::getCiclos(null);
        return view('matriculaCiclos', compact('alumnos', 'ciclos'));
    }
}
