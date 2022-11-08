<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
  $role1 = Role::create(['name'=>'Admin']);
  $role2 = Role::create(['name'=>'Turista']);
  $role3 = Role::create(['name'=>'Propietario']);


      Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2,$role3]);

  
 Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1 ]);
 Permission::create(['name' => 'admin.users.create'])->syncRoles([$role1]);
 Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);
 Permission::create(['name' => 'admin.users-index'])->syncRoles([$role1]);

   
  Permission::create(['name' => 'admin.categorias.index'])->syncRoles([$role1, $role2,$role3]);
  Permission::create(['name' => 'admin.categorias.create'])->syncRoles([$role1,$role3]);
  Permission::create(['name' => 'admin.categorias.edit'])->syncRoles([$role1,$role3]);
  Permission::create(['name' => 'admin.categorias.destroy'])->syncRoles([$role1,$role3]);


  Permission::create(['name' => 'admin.sitios.index'])->syncRoles([$role1, $role2,$role3]);
  Permission::create(['name' => 'admin.sitios.create'])->syncRoles([$role1,$role3]);
  Permission::create(['name' => 'admin.sitios.edit'])->syncRoles([$role1,$role3]);
  Permission::create(['name' => 'admin.sitios.destroy'])->syncRoles([$role1,$role3]);

  Permission::create(['name' => 'admin.servicios.index'])->syncRoles([$role1, $role2,$role3]);
  Permission::create(['name' => 'admin.servicios.create'])->syncRoles([$role1, $role2,$role3]);
  Permission::create(['name' => 'admin.servicios.edit'])->syncRoles([$role1, $role2,$role3]);
  Permission::create(['name'  => 'admin.servicios.destroy'])->syncRoles([$role1, $role2,$role3]);


  Permission::create(['name' => 'admin.promocions.index'])->syncRoles([$role1, $role2,$role3]);
  Permission::create(['name' => 'admin.promocions.create'])->syncRoles([$role1,$role3]);
  Permission::create(['name' => 'admin.promocions.edit'])->syncRoles([$role1,$role3]);
  Permission::create(['name' => 'admin.promocions.destroy'])->syncRoles([$role1,$role3]);

  Permission::create(['name' => 'admin.reservas.index'])->syncRoles([$role1,$role3]);
  Permission::create(['name' => 'admin.reservas.create'])->syncRoles([$role2,$role3]);
  Permission::create(['name' => 'admin.reservas.edit'])->syncRoles([$role2,$role3]);
  Permission::create(['name' => 'admin.reservas.destroy'])->syncRoles([$role2,$role3]);

  Permission::create(['name' => 'admin.comentarios.index'])->syncRoles([$role1, $role2,$role3]);
  Permission::create(['name' => 'admin.comentarios.create'])->syncRoles([$role1, $role2,$role3]);
  Permission::create(['name' => 'admin.comentarios.edit'])->syncRoles([$role1, $role2,$role3]);
  Permission::create(['name' => 'admin.comentarios.destroy'])->syncRoles([$role1, $role2,$role3]);






    }
}
