<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramacionSesionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProgramacionSesion', function (Blueprint $table) {
            $table->mediumIncrements('Codigo');
            $table->timestamp('FechaRegistro');
            $table->date('Fecha');
            $table->time('HoraInicio');
            $table->time('HoraFin');
            $table->unsignedBigInteger('Agrupacion')->unique()->nullable()->default(null);
            $table->string('Estado', 1)->default('P');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoPersonal')->nullable()->default(null);
            $table->unsignedMediumInteger('CodigoProgramacionCurso');
            $table->unsignedMediumInteger('CodigoReprogramacion')->nullable()->default(null);

            $table->foreign('CodigoPersonal')->references('Codigo')->on('Personal')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('CodigoProgramacionCurso')->references('Codigo')->on('ProgramacionCurso')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoReprogramacion')->references('Codigo')->on('ProgramacionSesion')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProgramacionSesion');
    }
}
