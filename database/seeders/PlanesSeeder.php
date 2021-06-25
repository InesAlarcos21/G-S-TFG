<?php

namespace Database\Seeders;

use App\Models\Planes;
use Illuminate\Database\Seeder;

class PlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan1 = Planes::create([
            'nombre'=>'Plan de Entrenamiento', 
            //'user_id'=>' ',
            'descripcion'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'precio' =>'120€', 
           // 'imagen' =>'./public/images/entrenamiento.jpg'
            
        ]);  
        $plan2= Planes::create([
            'nombre'=>'Plan de Entrenamiento + Nutrición', 
            'descripcion'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'precio' =>'340€',
            //'imagen'=>'/public/images/completo.jpg'
        ]); 
        $plan3 = Planes::create([
            'nombre'=>'Plan de Nutrición', 
            'descripcion'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'precio' =>'120€',
        //  'imagen'=> '/public/images/nutricion.jpg'
            
        ]); 
    }
}
