<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivoReprogramacionCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MotivoReprogramacionCurso', function (Blueprint $table) {
            $table->mediumIncrements('Codigo');
            $table->string('Descripcion', 300)->default('');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedMediumInteger('CodigoReprogramacionCurso');
            $table->unsignedSmallInteger('CodigoPersonal')->nullable()->default(null);

            $table->foreign('CodigoReprogramacionCurso')->references('Codigo')->on('ProgramacionCurso')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('MotivoReprogramacionCurso');
    }
}
