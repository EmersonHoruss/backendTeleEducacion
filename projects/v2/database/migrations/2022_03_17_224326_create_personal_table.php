<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personal', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->string('Nombre', 50);
            $table->string('ApellidoPaterno', 50);
            $table->string('ApellidoMaterno', 50);
            $table->string('Celular', 20)->default('');
            $table->string('Whatsapp', 20)->default('');
            $table->string('CorreoPersonal', 50)->nullable()->unique()->default(null);
            $table->string('CorreoInstitucional', 50)->nullable()->unique()->default(null);
            $table->string('Tipo', 1)->default('N');
            $table->boolean('Vigencia')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Personal');
    }
}
