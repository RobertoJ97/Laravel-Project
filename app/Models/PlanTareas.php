<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanTareas extends Model
{
    use HasFactory;
    protected $table = 'plan_formacions_tareas';
    protected $fillable = [
        'plan_formacion_id',
        'tareas_id',
    ];
}
