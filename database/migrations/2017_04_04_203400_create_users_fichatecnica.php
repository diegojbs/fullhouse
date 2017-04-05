<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersFichatecnica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichatecnica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('ancho');
            $table->text('contenido');
            $table->mediumText('imagen');
            $table->string('enlace_archivo', 150);
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
        Schema::drop('fichatecnica');
    }
}
