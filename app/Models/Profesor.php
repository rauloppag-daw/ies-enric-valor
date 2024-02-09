<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profesor extends Model
{
    use HasFactory;

    public static function getProfesores($horas)
    {
        $profesores = DB::table('profesores')->select('idProfesor', 'nombre', 'apellidos', DB::raw('SUM(horas) as horasHechas'))->join('modulos', 'idProfesor', 'profesor')
            ->groupBy('idProfesor')
            ->groupBy('nombre')
            ->groupBy('apellidos');

        if(isset($horas)){
            $profesores->having('horasHechas', '>', $horas);
            return $profesores->get();
        }

        return $profesores->get();
    }


}
