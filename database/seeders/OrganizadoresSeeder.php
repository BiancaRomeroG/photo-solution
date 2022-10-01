<?php

namespace Database\Seeders;

use App\Models\Organizador;
use Illuminate\Database\Seeder;

class OrganizadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organizador::create([
            'id_usuario' => 7,
        ]);

        Organizador::create([
            'id_usuario' => 8,
        ]);

        Organizador::create([
            'id_usuario' => 9,
        ]);

    }
}
