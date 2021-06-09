<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrenosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cartegoria_entrenos')->insert([
            'nombre_categoria'=>'Entrenamientos de Fuerza', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('cartegoria_entrenos')->insert([
            'nombre_categoria'=>'Entrenamientos de Cardio', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('cartegoria_entrenos')->insert([
            'nombre_categoria'=>'Entrenaminetos de Natacion', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('cartegoria_entrenos')->insert([
            'nombre_categoria'=>'Entrenamientos de Crossfit', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('cartegoria_entrenos')->insert([
            'nombre_categoria'=>'Entrenamientos de Pilates', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('cartegoria_entrenos')->insert([
            'nombre_categoria'=>'Entrenamientos de Yoga', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
    }
}
