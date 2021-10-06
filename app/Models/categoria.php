<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','slug','imagen','iconos'];

    //relacio de uno a mucho 

    public function subcategoria(){
        return $this->hasMany(subcategoria::class);
    }
    //relacion muchos a muchos 
    public function marcas(){
        return $this->belongsToMany(marcas::class);
    }

    public function productos(){
        return $this->hasManyThrough(producto::class, subcategoria::class);
    }
}
