<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Postulante', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoProgramacionExamen');
            $table->unsignedSmallInteger('CodigoPersona');

            $table->foreign('CodigoProgramacionExamen')->references('Codigo')->on('ProgramacionExamen')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoPersona')->references('Codigo')->on('Persona')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Postulante');
    }
}
