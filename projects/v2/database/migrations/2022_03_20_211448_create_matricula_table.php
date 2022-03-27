<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Matricula', function (Blueprint $table) {
            $table->mediumIncrements('Codigo');
            $table->timestamp('FechaRegistro');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoPersona');
            $table->unsignedSmallInteger('CodigoIngresante');
            $table->unsignedSmallInteger('CodigoCurso');
            $table->unsignedMediumInteger('CodigoProgramacionCurso');
            $table->unsignedSmallInteger('CodigoPersonal')->nullable()->default(null);

            $table->foreign('CodigoPersona')->references('Codigo')->on('Persona')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoIngresante')->references('Codigo')->on('Ingresante')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoCurso')->references('Codigo')->on('Curso')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoProgramacionCurso')->references('Codigo')->on('ProgramacionCurso')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoPersonal')->references('Codigo')->on('Personal')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Matricula');
    }
}
