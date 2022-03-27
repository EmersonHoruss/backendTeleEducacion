<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'Docente';
    public $timestamps = false;
    protected $fillable = [
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'CorreoPersonal',
        'CorreoInstitucional',
        'Celular',
        'Whatsapp',
        'Nombrado',
        'Grado',
        'TipoDocumento',
        'NumeroDocumento',
        'Vigencia',
    ];
}
