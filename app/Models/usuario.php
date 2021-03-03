<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Softdeletes;


class usuario extends Model
{
    use HasFactory;
    //use Softdeletes;
    protected $primaryKey='idusuario';
    protected $fillable=
    [
        'nombre',
        'apellidop',
        'apellidom',
        'sexo',
        'edad',
        'telefono',
        'correo',
        'idtipo_u',
        'activo'
    ];
}
