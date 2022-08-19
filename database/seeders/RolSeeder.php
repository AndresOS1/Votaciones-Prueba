<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       $admin = Role::create(['name' => 'Admin']);
       $lider = Role::create(['name' => 'Lider']);
       $votante = Role::create(['name' => 'Votante']);


       $permisoVotante1 = Permission::create(['name' => 'DatosDelVotante.index'])->syncRoles([$admin, $lider,$votante]);
       $permisoVotante2 =  Permission::create(['name' => 'DatosDelVotante.create'])->syncRoles([$admin, $lider]);
       $permisoVotante3 =  Permission::create(['name' => 'DatosDelVotante.store'])->syncRoles([$admin, $lider]);
       $permisoVotante4 =  Permission::create(['name' => 'editarvotante'])->syncRoles([$admin, $lider]);
       $permisoVotante5 =   Permission::create(['name' => 'DatosDelVotante.uptate'])->syncRoles([$admin, $lider]);
       $permisoVotante6 =  Permission::create(['name' => 'eliminarvotante'])->syncRoles([$admin, $lider]);



       $permisoPuesto1 =  Permission::create(['name' => 'PuestosDeVotaciones.index'])->syncRoles([$admin]);
       $permisoPuesto2 =  Permission::create(['name' => 'PuestosDeVotaciones.create'])->syncRoles([$admin]);
       $permisoPuesto3 =  Permission::create(['name' => 'PuestosDeVotaciones.store'])->syncRoles([$admin]);
       $permisoPuesto4 =  Permission::create(['name' => 'editarpuesto'])->syncRoles([$admin]);
       $permisoPuesto5 = Permission::create(['name' => 'PuestosDeVotaciones.uptate'])->syncRoles([$admin]);
       $permisoVotante6 = Permission::create(['name' => 'eliminarpuesto'])->syncRoles([$admin]);


       




    }
}
