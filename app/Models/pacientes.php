<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Softdeletes;

class pacientes extends Model
{
    use HasFactory;
    //use Softdeletes;
    protected $primaryKey='idpaci';
    protected $fillable=
    [
        'idpaci',
        'nombre',
        'apellidop',
        'apellidom',
        'sexo',
        'edad',
        'idtipossan',
        'telefono',
        'correo',
        'preguntaale',
        'alergias',
        
    ];
}
