<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ingresante', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->timestamp('FechaIngreso');
            $table->string('Estado', 1)->default('A');
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoPersona');
            $table->unsignedTinyInteger('CodigoCurricula');
            $table->unsignedTinyInteger('CodigoProgama');
            $table->unsignedTinyInteger('CodigoAdmision');

            $table->foreign('CodigoPersona')->references('Codigo')->on('Persona')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoCurricula')->references('Codigo')->on('Curricula')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoProgama')->references('Codigo')->on('Programa')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('CodigoAdmision')->references('Codigo')->on('Admision')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ingresante');
    }
}
