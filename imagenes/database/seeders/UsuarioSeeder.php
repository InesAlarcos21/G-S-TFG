<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'Ines', 
            'apellido'=>'Alarcos',
            'fechaN'=>('1994/04/21'),
            'sexo'=>'Femenino',
            'email'=>'ialarcosq02@gmail.com',
            'password'=> Hash::make('12345678'),
            'tipoUser' =>'Administrador',
            //'foto' => 'foto', 
        ]); 
      
   

    }
}
