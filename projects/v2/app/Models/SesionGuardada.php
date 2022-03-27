<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SesionGuardada extends Model
{
    protected $table = 'SesionGuardada';

    protected $fillable = [
        'Link',
        'Publicado',
        'Vigencia',
        'CodigoProgramacionSesion',
        'CodigoPersonal',
    ];
}
