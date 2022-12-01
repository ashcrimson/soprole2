<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes_slider', function (Blueprint $table) {
            $table->id();
            $table->string('ruta');
            /* FOREIGN KEY*/
            $table->unsignedBigInteger('seccion_id');
            $table->timestamps();

            /* REFERENCES */
            $table->foreign('seccion_id')->references('id')->on('secciones')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes_slider');
    }
}
