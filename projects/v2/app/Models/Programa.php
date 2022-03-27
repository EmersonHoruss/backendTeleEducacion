<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{

    protected $table = 'Programa';

    protected $fillable = [
        'Identificador',
        'Nombre',
        'Tipo',
        'Vigencia',
        'CodigoCoordinador',
        'CodigoFacultad',
    ];
}
