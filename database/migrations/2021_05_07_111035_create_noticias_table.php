<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_noticias', function (Blueprint $table){
            $table->id(); 
            $table->string('nombre_categoria'); 
            $table->timestamps();
        });
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); 
            $table->text('descripcion'); 
            $table->string('fuente'); 
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
        Schema::dropIfExists('noticias');
    }
}
