<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Perfil', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->string('Tipo', 1);
            $table->string('Estado', 1)->default('A');
            $table->date('InicioAcceso')->nullable();
            $table->date('FinAcceso')->nullable();
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoUsuario');

            $table->foreign('CodigoUsuario')->references('Codigo')->on('Usuario')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Perfil');
    }
}
