<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Facultad', function (Blueprint $table) {
            $table->tinyIncrements('Codigo');
            $table->string('Nombre', 100)->unique();
            $table->string('Siglas', 15)->default('');
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
        Schema::dropIfExists('Facultad');
    }
}
