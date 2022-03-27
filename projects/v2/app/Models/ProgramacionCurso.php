<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramacionCurso extends Model
{
    protected $table = 'ProgramacionCurso';

    protected $fillable = [
        'FechaRegistro',
        'FechaInicio',
        'FechaFin',
        'LinkInstitucional',
        'LinkNoInstitucional',
        'Dirigido',
        'Modalidad',
        'Grupo',
        'Atrasado',
        'Vigencia',
        'CodigoDocente',
        'CodigoCoordinador',
        'CodigoPrograma',
        'CodigoCurso',
        'CodigoPersonal',
        'CodigoReprogramacionCurso',
    ];
}
