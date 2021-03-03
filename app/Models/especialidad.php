<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;


class especialidad extends Model
{
    use Softdeletes;
    use HasFactory;
    protected $primaryKey='idesp';
    protected $fillable=
    [
      'especialidad'
    ];
}
