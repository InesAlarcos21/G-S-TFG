<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->string('tipo'); 
            $table->string('ingredientes');
            $table->string('preparacion');
            $table->string('tiempo'); 
            $table->string('imagen'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listado');
    }
}
