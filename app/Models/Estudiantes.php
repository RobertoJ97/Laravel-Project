<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $table='estudiantes';
    protected $fillable=[
    'nombre',
    'apellido',
    'solapin',
    'grupo',
    'correo',
    ];
    use HasFactory;

    public function Profesor(){
        return $this->hasMany('App\Models\Profesor');
    }
    public function plan(){
        return $this->hasOne('App\Models\PlanFormacion');
    }
    public function Asistencia(){
        return $this->belongTo('App\Models\Asistencia');
    }
}
