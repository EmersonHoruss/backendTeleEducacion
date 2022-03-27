<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'Perfil';
    protected $primaryKey = 'Codigo';

    protected $fillable = [
        'Tipo',
        'Estado',
        'InicioAcceso',
        'FinAcceso',
        'Vigencia',
        'CodigoUsuario',
    ];

    public function usuario(){
        return $this->belongsToMany(Usuario::class, 'CodigoUsuario');
    }
}
