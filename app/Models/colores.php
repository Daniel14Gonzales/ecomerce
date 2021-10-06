<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colores extends Model
{
    use HasFactory;

     protected $fillable = ['nombre'];

     //relacionj muchos a muchos 
        public function productos (){
            return $this->belongsToMany(Producto::class);

        }

        public function tallas(){
            return $this->belongsToMany(talla::class);
        }
}
