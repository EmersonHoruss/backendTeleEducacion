<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivoReprogramacionExamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MotivoReprogramacionExamen', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->string('Descripcion',300)->default('');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoReprogramacionExamen');
            $table->unsignedSmallInteger('CodigoPersonal');

            $table->foreign('CodigoReprogramacionExamen')->references('Codigo')->on('ProgramacionExamen')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('MotivoReprogramacionExamen');
    }
}
