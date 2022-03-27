<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $table = 'Curso';

    protected $fillable = [
        'Identificador',
        'Nombre',
        'CantidadCreditos',
        'Semestre',
        'CantidadHorasTeoricas',
        'CantidadHorasPracticas',
        'Tipo',
        'Vigencia',
        'CodigoCurricula',
    ];
}
