<?php

namespace Database\Seeders;

use App\Models\Catalogo;
use Illuminate\Database\Seeder;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalogo::create([
            'id_evento'=>1,
        ]);
    }
}
