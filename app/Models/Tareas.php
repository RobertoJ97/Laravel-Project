<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    protected $table='tareas';
    protected $fillable=[
    'fecha',
    'semana',
    'actividades',
    'habiliadades',
    'cant_horas',
    'resultado_esperado',
    'tipo_resultado',
    ];
    use HasFactory;
    public function plan(){
        return $this->belongsToMany(PlanFormacion::class,'plan_formacions_tareas')->withTimestamps();

    }
}
