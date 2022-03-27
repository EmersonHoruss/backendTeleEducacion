<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'Personal';
    protected $primaryKey = 'Codigo';

    protected $fillable = [
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Celular',
        'Whatsapp',
        'CorreoPersonal',
        'CorreoInstitucional',
        'Tipo',
        'Vigencia',
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'CodigoPersonal');
    }
}
