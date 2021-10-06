<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marcas extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    //Relacion uno a muchhos 
    public function productos(){
        return $this->hasMany(productos::class);
    }

    //Relacion muchos a muchos 
    public function categorias(){
        return $this->belongsToMany(categoria::class);
    }
}
