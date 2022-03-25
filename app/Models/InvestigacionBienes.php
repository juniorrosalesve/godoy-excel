<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestigacionBienes extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'fecha_envio',
        'cedula',
        'asesor',
        'tipificacion',
        'direccion',
        'matricula',
        'referencia_castral',
        'departamento',
        'ciudad'
    ];
}
