<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_emp',
        'tipo_doc',
        'cif',
        'nombre_tutor',
        'apellido1',
        'apellido2',
        'pais',
        'provincia',
        'municipio',
        'estado',
        'telefono',
        'email',
    ];
}
