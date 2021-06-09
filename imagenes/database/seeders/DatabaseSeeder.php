<?php

namespace Database\Seeders;

use App\Models\CartegoriaEntreno;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RoleSeeder::class); 
        $this->call(CategoriasSeeder::class); 
        $this->call(EntrenosSeeder::class);
        $this->call(UsuarioSeeder::class); 
        // \App\Models\User::factory(10)->create();
    }
}
