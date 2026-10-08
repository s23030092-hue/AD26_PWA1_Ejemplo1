<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtiquetaRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiqueta_receta', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('etiqueta_id');
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->onDelete('cascade');

            $table->unsignedBigInteger('receta_id');
            $table->foreign('receta_id')->references('id')->on('recetas')->onDelete('cascade');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etiqueta_receta');
    }
}
