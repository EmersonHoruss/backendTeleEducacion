<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Programa', function (Blueprint $table) {
            $table->tinyIncrements('Codigo');
            $table->string('Identificador', 5)->nullable()->unique()->default(null);
            $table->string('Nombre', 150);
            $table->string('Tipo', 2);
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoCoordinador')->nullable();
            $table->unsignedTinyInteger('CodigoFacultad');

            $table->foreign('CodigoCoordinador')->references('Codigo')->on('Docente')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('CodigoFacultad')->references('Codigo')->on('Facultad')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Programa');
    }
}
