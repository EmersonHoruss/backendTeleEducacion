<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'Usuario';
    protected $primaryKey = 'Codigo';

    protected $fillable = [
        'Nombre',
        'Correo',
        'Estado',
        'InicioAcceso',
        'FinAcceso',
        'Vigencia',
        'CodigoPersonal',
    ];

    public function personal()
    {
        return $this->belongsTo(Personal::class, 'CodigoPersonal');
    }

    public function perfiles()
    {
        return $this->hasMany(Perfil::class, 'CodigoPefil');
    }
}
