<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Alumno extends Model
{
    use HasFactory;

    public static function getAlumnos($id){
        $alumnos = DB::table('alumnos');

        if(isset($id)){
            $alumnos->where('idAlumno', $id);
            return $alumnos->get()->first();
        }
        return $alumnos->orderBy('ciclo', 'asc')->orderBy('idAlumno', 'asc')->get();
    }

    public static function actualizarCiclo($idAlumno,  $ciclo)
    {
        DB::table('alumnos')->where('idAlumno', $idAlumno)->update(['ciclo' => $ciclo]);
    }
}
