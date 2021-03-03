<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class odontologo extends Model
{
    use Softdeletes;
    use HasFactory;
    protected $primaryKey='idodo';
    protected $fillable=
    [
      'nombre',
      'appaterno',
      'apmaterno',
      'sexo',
      'edad',
      'telefono',
      'correo',
      'password',
      'calle',
      'numint',
      'numext',
      'idmun',
      'colonia',
      'idesp',
      'hora_entrada',
      'hora_salida',
      'activo'

    ];
}
