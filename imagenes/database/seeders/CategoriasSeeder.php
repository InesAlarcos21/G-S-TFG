<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_recetas')->insert([
            'nombre_categoria'=>'Ensaldas', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('categoria_recetas')->insert([
            'nombre_categoria'=>'Guisos', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('categoria_recetas')->insert([
            'nombre_categoria'=>'Cenas', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('categoria_recetas')->insert([
            'nombre_categoria'=>'Postres', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('categoria_recetas')->insert([
            'nombre_categoria'=>'Comidas', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
        DB::table('categoria_recetas')->insert([
            'nombre_categoria'=>'Desayunos', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]); 
    }
}
