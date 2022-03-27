<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramacionCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProgramacionCurso', function (Blueprint $table) {
            $table->mediumIncrements('Codigo');
            $table->timestamp('FechaRegistro');
            $table->date('FechaInicio');
            $table->date('FechaFin');
            $table->string('LinkInstitucional', 50)->default('');
            $table->string('LinkNoInstitucional', 50)->default('');
            $table->boolean('Dirigido')->default(false);
            $table->string('Modalidad', 1)->nullable()->default(null);
            $table->string('Grupo', 1)->nullable()->default(null);
            $table->boolean('Atrasado')->default(false);
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoDocente');
            $table->unsignedSmallInteger('CodigoCoordinador');
            $table->unsignedTinyInteger('CodigoPrograma');
            $table->unsignedSmallInteger('CodigoCurso');
            $table->unsignedSmallInteger('CodigoPersonal')->nullable()->default(null);
            $table->unsignedMediumInteger('CodigoReprogramacionCurso')->nullable()->default(null);

            $table->foreign('CodigoDocente')->references('Codigo')->on('Docente')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoCoordinador')->references('Codigo')->on('Docente')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoPrograma')->references('Codigo')->on('Programa')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoCurso')->references('Codigo')->on('Curso')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoPersonal')->references('Codigo')->on('Personal')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('CodigoReprogramacionCurso')->references('Codigo')->on('ProgramacionCurso')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProgramacionCurso');
    }
}
