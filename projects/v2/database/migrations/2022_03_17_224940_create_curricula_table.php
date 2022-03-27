<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Curricula', function (Blueprint $table) {
            $table->tinyIncrements('Codigo');
            $table->string('Nombre', 8);
            $table->boolean('Activo')->default(true);
            $table->boolean('Vigencia')->default(true);
            $table->unsignedTinyInteger('CodigoPrograma');

            $table->foreign('CodigoPrograma')->references('Codigo')->on('Programa')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Curricula');
    }
}
