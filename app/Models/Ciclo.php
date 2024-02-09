<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ciclo extends Model
{
    use HasFactory;
    protected $table = 'ciclos';
    protected $primaryKey = 'idCiclo';
    public $timestamps = false;

    protected $guarded = [];

    public $incrementing = true;

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'idGrado');
    }

    public static function getCiclos($id){
        $ciclos = DB::table('ciclos')->join('grados', 'grado', 'idGrado');
        if (isset($id)){
            $ciclos->where('idCiclo', $id);
            return $ciclos->get()->first();
        }
        return $ciclos->get();
    }




}
