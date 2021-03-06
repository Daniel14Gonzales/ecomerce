<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_producto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('colores_id');
            $table->foreign('colores_id')->references('id')->on('colores');

            $table->unsignedBigInteger('productos_id');
            $table->foreign('productos_id')->references('id')->on('productos');

            $table->integer('cantidad');

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
        Schema::dropIfExists('color_producto');
    }
}
