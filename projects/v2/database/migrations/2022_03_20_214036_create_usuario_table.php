<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->string('Nombre', 50)->default('');
            $table->string('Correo', 50)->unique();
            $table->string('Estado', 1)->default('A');
            $table->date('InicioAcceso')->nullable();
            $table->date('FinAcceso')->nullable();
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoPersonal');

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
        Schema::dropIfExists('Usuario');
    }
}
