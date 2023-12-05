<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanFormacion extends Model
{
    protected $table='plan_formacions';
    protected $fillable=[
    'estudiantes_id',
    'set_id',
    'responsable_id',
    'profesor_id',
    'disciplina',
    'asignatura',
    'cant_horas',
    'cant_horas_semanal',
    'centro_desarrollo',
    'grupo_investigacion',
    'nombre_proyecto',
    'tipo_proyecto',
    'rol_desempena',
    ];
    use HasFactory;

    public function set(){
        return $this->belongsTo('App\Models\SET');
    }
    public function Estudiantes(){
    return $this->belongsTo('App\Models\Estudiantes');

    }
    public function Profesor(){
        return $this->belongsTo('App\Models\Profesor');

    }
    public function responsable(){
        return $this->belongsTo('App\Models\ResponsablePID');

    }
    public function tareas(){
        return $this->belongsToMany(Tareas::class,'plan_formacions_tareas')->withTimestamps();
    }
}
