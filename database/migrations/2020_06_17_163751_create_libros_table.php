<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre_libro');
            $table->bigInteger('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('autors');
            $table->bigInteger('editorial_id')->unsigned();
            $table->foreign('editorial_id')->references('id')->on('editorials');
            $table->string('publicacion');
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
        Schema::dropIfExists('libros');
    }
}
