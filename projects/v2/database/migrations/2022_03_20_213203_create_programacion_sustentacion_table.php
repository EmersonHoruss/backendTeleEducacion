<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramacionSustentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProgramacionSustentacion', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->timestamp('FechaRegistro');
            $table->date('Fecha');
            $table->time('HoraInicio');
            $table->time('HoraFin');
            $table->string('Link', 50)->default('');
            $table->string('NumeroResolucion', 30);
            $table->string('Estado', 1)->default('P');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoProyecto');
            $table->unsignedSmallInteger('CodigoPersonal');
            $table->unsignedSmallInteger('CodigoReprogramacionSustenta')->nullable();

            $table->foreign('CodigoProyecto')->references('Codigo')->on('Proyecto')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoPersonal')->references('Codigo')->on('Personal')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoReprogramacionSustenta')->references('Codigo')->on('ProgramacionSustentacion')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProgramacionSustentacion');
    }
}
