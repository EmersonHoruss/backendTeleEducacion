<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Persona', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->string('Nombre', 50);
            $table->string('ApellidoPaterno', 50);
            $table->string('ApellidoMaterno', 50);
            $table->string('CorreoPersonal', 50)->nullable()->unique()->default(null);
            $table->string('CorreoInstitucional', 50)->nullable()->unique()->default(null);
            $table->string('Celular', 20)->default('');
            $table->string('Whatsapp', 20)->default('');
            $table->string('TipoDocumento', 60)->default('DNI');
            $table->string('NumeroDocumento', 30)->nullable()->unique();
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
        Schema::dropIfExists('Persona');
    }
}
