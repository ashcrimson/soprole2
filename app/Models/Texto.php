<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Texto extends Model
{
    use HasFactory;

    protected $table = 'textos'; 

    protected $fillable = [
        'texto',
        'posicion',
        'seccion_id'
    ];
}
