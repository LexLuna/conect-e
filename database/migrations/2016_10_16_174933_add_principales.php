<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrincipales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('principales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',60);
            $table->text('contenido');
            $table->string('descripcion',80);
            $table->date('expiracion');
            $table->integer('imagen_id')->unsigned();
            $table->foreign('imagen_id')->references('id')->on('imagenes')->onDelete('cascade');
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('principales');
    }
}
