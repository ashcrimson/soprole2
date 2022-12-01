<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('layout');
            $table->string('imagen_web')->nullable();
            $table->string('imagen_mobile')->nullable();
            $table->boolean('texto')->default(0);
            $table->boolean('galeria')->default(0);
            $table->boolean('video')->default(0);
            $table->boolean('documento')->default(0);
            $table->unsignedBigInteger('pagina_id');

            $table->integer('orden')->nullable();
            $table->boolean('estado')->default(1);
           
            /* REFERENCES */
            $table->foreign('pagina_id')->references('id')->on('paginas')->onDelete('cascade');

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
        Schema::dropIfExists('secciones');
    }
}
