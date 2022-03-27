<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotivoReprogramacionSesion extends Model
{
    protected $table = 'MotivoReprogramacionSesion';

    protected $fillable = [
        'Descripcion',
        'Vigencia',
        'CodigoReprogramacionSesion',
        'CodigoPersonal',
    ];
}
