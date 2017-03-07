<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaImagenesGalerias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes_galerias', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('imagen');
            $table->string('enlace_imagen');
            $table->integer('galeria_id')->unsigned()->index();
            $table->foreign('galeria_id')->references('id')->on('galerias');
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
        Schema::drop('imagenes_galerias');
    }
}
