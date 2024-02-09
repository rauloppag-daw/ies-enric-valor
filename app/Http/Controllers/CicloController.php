<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use App\Models\Modulo;
use Illuminate\Http\Request;

class CicloController extends Controller
{
    public function mostrarCiclo($id){
        $ciclo = Ciclo::getCiclos($id);
        $modulos = Modulo::getModulosCiclo($id);
        return view('detallesCiclo', compact('ciclo', 'modulos'));
    }
}
