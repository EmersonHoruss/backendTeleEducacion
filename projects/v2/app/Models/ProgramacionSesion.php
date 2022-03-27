<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramacionSesion extends Model
{
    protected $table = 'ProgramacionSesion';

    protected $fillable = [
        'FechaRegistro',
        'Fecha',
        'HoraInicio',
        'HoraFin',
        'Agrupacion',
        'Estado',
        'Vigencia',
        'CodigoPersonal',
        'CodigoProgramacionCurso',
        'CodigoReprogramacion',
    ];
}
