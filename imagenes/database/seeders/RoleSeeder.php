<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Administrador']); 
        $role2 = Role::create(['name' => 'Normales']); 
        $role3 = Role::create(['name' =>'Entrenadores']); 
        $role4 = Role::create(['name' => 'Nutricionistas']); 


        //PERMISOS PARA LAS RECETAS: 
        Permission::create(['name' =>'recetas.index']); 
        Permission::create(['name' =>'recetas.create']); 
        Permission::create(['name' =>'recetas.edit']); 
        Permission::create(['name' =>'recetas.destroy']); 

        //PERMISOS PARA PERFIL: 
        Permission::create(['name' =>'perfiles.edit'])->syncRoles([$role1, $role2, $role3, $role4]); 

        //PERMISOS PARA NOTICIAS: 
        //Permission::create(['name' =>'noticias.index'])->syncRoles([$role1, $role2, $role3, $role4]); 
        Permission::create(['name' =>'noticias.create'])->syncRoles([$role1]); 

        //PERMISOS PARA PLANES: 
       // Permission::create(['name' =>'planes.index'])->syncRoles([$role1, $role2, $role3, $role4]);  
        Permission::create(['name' =>'planes.create'])->syncRoles([$role1]); 

        //PERMISOS PARA TESTIMONIALES: 
       // Permission::create(['name' =>'testimoniales.index'])->syncRoles([$role1, $role2, $role3, $role4]); 
        Permission::create(['name' =>'testimoniales.create'])->syncRoles([$role2,$role3, $role4]); 

        //PERMISOS PARA NOSOTROS: 
        //Permission::create(['name' =>'nosotros.index'])->syncRoles([$role1, $role2, $role3, $role4]); 
        Permission::create(['name' =>'nosotros.create'])->syncRoles([$role1]); 

        //PERMISOS PARA CONTACTOS: 
        //Permission::create(['name' =>'contactos.index'])->syncRoles([$role1, $role2, $role3, $role4]); 
        //Permission::create(['name' =>'contactos.create'])->syncRoles([$role1, $role2, $role3, $role4]); 

        //PERMISOS PARA EVENTOS: 
        Permission::create(['name' =>'evento.index'])->syncRoles([$role1, $role2, $role3, $role4]); 
        Permission::create(['name' =>'evento.calendario'])->syncRoles([$role1, $role2, $role3, $role4]); 
        Permission::create(['name' =>'evento.create'])->syncRoles([$role1, $role3, $role4]);  
        Permission::create(['name' =>'evento.edit'])->syncRoles([$role1, $role3, $role4]); 
        Permission::create(['name' =>'evento.destroy'])->syncRoles([$role1, $role3, $role4]); 
    }
}
