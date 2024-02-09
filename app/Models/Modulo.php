<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Modulo extends Model
{
    use HasFactory;

    public static function getModulosCiclo($id){
        $modulos = DB::table('modulos')->join('profesores', 'profesor', 'idProfesor')->where('ciclo', $id)->orderBy('curso', 'asc')->orderBy('horas', 'asc')->orderBy('nombre', 'asc');
        return $modulos->get();
    }

    public static function getIdCicloModulo($idModulo){
        $idCiclo = DB::table('modulos')->select('ciclo')->where('idModulo', $idModulo)->get()->first();
        return $idCiclo;
    }
}
