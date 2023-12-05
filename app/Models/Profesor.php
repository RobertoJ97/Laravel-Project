<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table='profesors';
    protected $fillable=[
    'nombre',
    'apellido',
    'solapin',
    'usuario',
    'correo',
    ];
    use HasFactory;

public function Estudiantes(){
    return $this->belongsTo('App\Models\Estudiantes');
}
public function PlanFormacion(){
    return $this->hasMany('App\Models\PlanFormacion');
}
}
