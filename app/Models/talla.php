<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class talla extends Model
{
    use HasFactory;

    protected $fillable = ['name','product_id','updated_id'];

    //relacion uno a muchos inversa 
    public function productos(){
        return $this->belongsTo(producto::class);

    }
    //relacion muchos a muchos 
    public function colores(){
        return $this->belongsToMany(color::class);

       


    }
}
