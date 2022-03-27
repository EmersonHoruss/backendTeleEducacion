<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Autor', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoIngresante')->nullable();
            $table->unsignedSmallInteger('CodigoPersona');
            $table->unsignedTinyInteger('CodigoPrograma')->nullable();
            $table->unsignedSmallInteger('CodigoProyecto');

            $table->foreign('CodigoIngresante')->references('Codigo')->on('Ingresante')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('CodigoPersona')->references('Codigo')->on('Persona')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoPrograma')->references('Codigo')->on('Programa')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('CodigoProyecto')->references('Codigo')->on('Proyecto')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Autor');
    }
}
