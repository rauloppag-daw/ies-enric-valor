<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Matricula extends Model
{
    use HasFactory;

    public static function getMatriculas($idAlumno)
    {
        $matriculas = DB::table('matricula')->where('alumno', $idAlumno);
        $matriculas->distinct('modulo')->select('modulo');
        return $matriculas;
    }

    public static function getMatriculado($idAlumno)
    {
        $matriculas = self::getMatriculas($idAlumno);

        $matriculado = DB::table('modulos')->join('profesores', 'profesor', 'idProfesor')->whereIn('idModulo', $matriculas);
        return $matriculado->get();
    }

    public static function getNoMatriculado($idAlumno, $idCiclo)
    {
        $matriculas = self::getMatriculas($idAlumno);

        $noMatriculas = DB::table('modulos')->join('profesores', 'profesor', 'idProfesor')->where('ciclo', $idCiclo)->whereNotIn('idModulo', $matriculas);
        return $noMatriculas->get();
    }

    public static function insertar($idModulo, $idAlumno)
    {
        DB::table('matricula')->insert(['alumno' => $idAlumno, 'modulo' => $idModulo]);
    }

    public static function eliminar($idModulo, $idAlumno)
    {
        DB::table('matricula')->where('alumno', $idAlumno)->where('modulo', $idModulo)->delete();
    }
}
