<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravel\Jetstream\Rules\Role as RulesRole;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([
            'name'=> 'Admin',
        ]);

        $role2 = Role::create([
            'name'=> 'Fotografo',
        ]);

        $role3 = Role::create([
            'name'=> 'Cliente',
        ]);

        $role4 = Role::create([
            'name'=> 'Organizador',
        ]);

        Permission::create(['name'=>'dashboard']);
       
    }
}
