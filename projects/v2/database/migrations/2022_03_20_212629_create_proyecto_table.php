<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proyecto', function (Blueprint $table) {
            $table->smallIncrements('Codigo');
            $table->string('Nombre', 200);
            $table->boolean('Vigencia')->default(true);
            $table->unsignedSmallInteger('CodigoAsesor')->nullable();
            $table->unsignedSmallInteger('CodigoPresidente')->nullable();
            $table->unsignedSmallInteger('CodigoSecretario')->nullable();
            $table->unsignedSmallInteger('CodigoVocal')->nullable();
            $table->unsignedSmallInteger('CodigoPersonal')->nullable();

            $table->foreign('CodigoAsesor')->references('Codigo')->on('Docente')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('CodigoPresidente')->references('Codigo')->on('Docente')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('CodigoSecretario')->references('Codigo')->on('Docente')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('CodigoVocal')->references('Codigo')->on('Docente')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('Proyecto');
    }
}
