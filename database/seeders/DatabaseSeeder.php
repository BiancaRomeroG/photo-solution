<?php

namespace Database\Seeders;

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
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FotografosSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(OrganizadoresSeeder::class);
        $this->call(PaquetesSeeder::class);
        $this->call(EventosSeeder::class);
        $this->call(ContratosSeeder::class);
        $this->call(CatalogoSeeder::class);
        
    }
}
