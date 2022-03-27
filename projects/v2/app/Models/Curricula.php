<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curricula extends Model
{
    protected $table = 'Curricula';

    protected $fillable = [
        'Nombre',
        'Activo',
        'Vigencia',
        'CodigoPrograma',
    ];
}
