<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSustentacionGuardadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SustentacionGuardada', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->timestamp('FechaRegistro');
            $table->string('Link', 300)->default('');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoProgramacionSustentacion');
            $table->unsignedSmallInteger('CodigoPersonal');

            $table->foreign('CodigoProgramacionSustentacion')->references('Codigo')->on('ProgramacionSustentacion')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoPersonal')->references('Codigo')->on('Personal')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SustentacionGuardada');
    }
}
