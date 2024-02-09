<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Ciclo;
use App\Models\Matricula;
use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function obtenerForm(Request $post, $idAlumno){
        $datos = $post->all();
        Alumno::actualizarCiclo($idAlumno, $datos['ciclo']);
        return redirect()->route('matriculacion.modulos',  ['idCiclo' => $datos['ciclo'], 'idAlumno' => $idAlumno]);


    }

    public function mostrarModulos($idCiclo, $idAlumno){
        $ciclo = Ciclo::getCiclos($idCiclo);
        $alumno = Alumno::getAlumnos($idAlumno);

        $matriculas = Matricula::getMatriculado($idAlumno);

        $noMatriculas = Matricula::getNoMatriculado($idAlumno, $idCiclo);


        return view('matriculaModulos', compact('matriculas', 'noMatriculas', 'alumno', 'ciclo'));
    }

    public function insertarMatricula($idModulo, $idAlumno){
        Matricula::insertar($idModulo, $idAlumno);
        $idCiclo = Modulo::getIdCicloModulo($idModulo)->ciclo;

        return redirect()->route('matriculacion.modulos',  ['idCiclo' => $idCiclo, 'idAlumno' => $idAlumno]);
    }

    public function anularMatricula($idModulo, $idAlumno){
        Matricula::eliminar($idModulo, $idAlumno);
        $idCiclo = Modulo::getIdCicloModulo($idModulo)->ciclo;

        return redirect()->route('matriculacion.modulos',  ['idCiclo' => $idCiclo, 'idAlumno' => $idAlumno]);
    }
}
