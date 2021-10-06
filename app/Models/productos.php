<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO =2;

    //campos que se evitaran llenar por asignacion masiva 
     protected $guarded = ['id','created_at','updated_at'];

     public function tallas(){
        return $this->hasmany(talla::class);
     }

     //Relacion uno a muchos inversa 
     public function marca(){
        return $this->belongsTo(marca::class);
        }

      public function subcategoria(){
         return $this->belongs(subcategoria::class);
        
     }

     // relacion muchos a muchos 
       public function colores(){
        return $this->belongsToMany(Color::class);

     }
     //relacion uno a muchos polimorfica
     public function imagen(){
      return $this->morphMany(imagen::class, "imageable");
     }
}
