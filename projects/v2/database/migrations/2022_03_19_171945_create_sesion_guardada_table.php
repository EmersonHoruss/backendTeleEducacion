<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSesionGuardadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SesionGuardada', function (Blueprint $table) {
            $table->mediumIncrements('Codigo');
            $table->string('Link', 300);
            $table->boolean('Publicado')->default(false);
            $table->boolean('Vigencia')->default(true);
            $table->unsignedMediumInteger('CodigoProgramacionSesion');
            $table->unsignedSmallInteger('CodigoPersonal')->nullable()->default(null);

            $table->foreign('CodigoProgramacionSesion')->references('Codigo')->on('ProgramacionSesion')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('SesionGuardada');
    }
}
