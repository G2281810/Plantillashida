<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_sangres extends Model
{
    use HasFactory;
    protected $primaryKey='idtipossan';
    protected $fillable=['idtipossan','tipo'];
}
