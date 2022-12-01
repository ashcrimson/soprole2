<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pagina extends Model
{
    use HasFactory;

    protected $table = 'paginas'; 

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*************************************************
     *  Local Scope
     **************************************************/

    public function scopeActive($query){
        return $query->where('estado', 1);
    }

    /*************************************************
     *  Mutators and Accessors
     **************************************************/

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
