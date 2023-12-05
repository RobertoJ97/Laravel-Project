<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SET extends Model
{
    protected $table='sets';
    protected $fillable=[
    'nombre',
    'apellido',
    'solapin',
    'categoria_docente',
    'grado_cientifico',
    'correo',
    ];
    use HasFactory;
    public function PlanFormacion(){
        return $this->hasMany('App\Models\PlanFormacion');
    }
}
