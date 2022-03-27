<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramacionExamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProgramacionExamen', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->timestamp('FechaRegistro');
            $table->date('Fecha');
            $table->time('HoraInicio');
            $table->time('HoraFin');
            $table->string('Link', 50);
            $table->boolean('Oral');
            $table->string('Tipo', 1);
            $table->string('Estado', 1)->default('P');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedTinyInteger('CodigoProgama');
            $table->unsignedSmallInteger('CodigoDocente');
            $table->unsignedSmallInteger('CodigoPersonal');
            $table->unsignedSmallInteger('CodigoReprogramacionExamen')->nullable();

            $table->foreign('CodigoProgama')->references('Codigo')->on('Programa')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoDocente')->references('Codigo')->on('Docente')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoPersonal')->references('Codigo')->on('Personal')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoReprogramacionExamen')->references('Codigo')->on('ProgramacionExamen')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProgramacionExamen');
    }
}
