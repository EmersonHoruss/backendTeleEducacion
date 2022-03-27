<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Curso', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->string('Identificador', 6)->default('');
            $table->string('Nombre', 100);
            $table->tinyInteger('CantidadCreditos')->unsigned()->default(0);
            $table->tinyInteger('Semestre')->unsigned()->default(0);
            $table->smallInteger('CantidadHorasTeoricas')->unsigned()->default(0);
            $table->smallInteger('CantidadHorasPracticas')->unsigned()->default(0);
            $table->string('Tipo', 2)->default('');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedTinyInteger('CodigoCurricula');

            $table->foreign('CodigoCurricula')->references('Codigo')->on('Curricula')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Curso');
    }
}
