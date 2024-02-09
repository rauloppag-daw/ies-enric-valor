<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    protected $table = 'grados';
    protected $primaryKey = 'idGrado';
    public $timestamps = false;

    protected $guarded = [];

    public $incrementing = true;

    public function ciclos(){
        return $this->hasMany(Ciclo::class, 'grado');
    }

    public static function getGrados(){
        return Grado::get();
    }
}
