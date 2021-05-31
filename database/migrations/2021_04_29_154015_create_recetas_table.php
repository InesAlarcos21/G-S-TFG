<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_recetas', function (Blueprint $table){
            $table->id(); 
            $table->string('nombre_categoria'); 
            $table->timestamps();
        });

        Schema::create('cartegoria_entrenos', function (Blueprint $table){
            $table->id(); 
            $table->string('nombre_categoria'); 
            $table->timestamps();
        });
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('cliente_id')->references('id')->on('users');
            $table->foreignId('recetas_id')->references('id')->on('categoria_recetas')->nullable();
            $table->foreignId('entrenos_id')->references('id')->on('cartegoria_entrenos')->nullable();
            $table->string('nombre');
            $table->text('ingredientes')->nullable();
            $table->text('preparacion')->nullable();
            $table->string('tiempoCocinado')->nullable();
            $table->text('ejercicios')->nullable(); 
            $table->text('repeticiones')->nullable();
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
        Schema::dropIfExists('categoria_entrenos');
        Schema::dropIfExists('categoria_receta');
        Schema::dropIfExists('recetas');
    }
}
