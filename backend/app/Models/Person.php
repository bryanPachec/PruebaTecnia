<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = "person";

    protected $fillable = [
        'id',
        'usuario',
        'nombres',
        'apellidos',
        'tipo_identificacion',
        'numero_identificacion',
        'fecha_nacimiento',
        'contraseña'
    ];
 
}
