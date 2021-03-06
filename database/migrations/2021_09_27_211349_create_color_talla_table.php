<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorTallaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_talla', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('colores_id');
            $table->foreign('colores_id')->references('id')->on('colores');


            $table->unsignedBigInteger('tallas_id');
            $table->foreign('tallas_id')->references('id')->on('tallas');

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
        Schema::dropIfExists('color_talla');
    }
}
