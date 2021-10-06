<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->string('imagen');
            //correcion de error 
            $table->string('colores')->nullable();

                    // el (false) refiere a "no se requieren esos campos"
            $table->boolean('color')->default(false);
            $table->boolean('talla')->default(false);

            $table->unsignedBigInteger('categorias_id');

            $table->foreign('categorias_id')->references('id')->on('categorias');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategorias');
    }
}
