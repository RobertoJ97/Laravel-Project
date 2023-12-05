<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsablePID extends Model
{
    protected $table='responsable_p_i_d_s';
    protected $fillable=[
    'nombre',
    'apellido',
    'solapin',
    'ano_responsable',
    'usuario',
    'correo',
    ];
    use HasFactory;
    
    public function PlanFormacion(){
        return $this->hasMany('App\Models\PlanFormacion');
    }
}
