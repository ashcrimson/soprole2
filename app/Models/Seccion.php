<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $table = 'secciones'; 

    protected $fillable = [
        'nombre',
        'imagen_web',
        'imagen_mobile',
        'texto',
        'galeria',
        'video',
        'documento',
        'orden',
        'estado'
    ];

    /*************************************************
     *  Local Scope
     **************************************************/

    public function scopeActive($query){
        return $query->where('estado', 1);
    }

    /*************************************************
     *  Eloquent Relationships
     **************************************************/

    public function textos()
    {
        return $this->hasOne(Texto::class, 'seccion_id');
    }

    public function imagenes()
    {
        return $this->hasMany(Galeria::class, 'seccion_id');
    }

    public function videos()
    {
        return $this->hasOne(Video::class, 'seccion_id');
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class, 'seccion_id');
    }

}
