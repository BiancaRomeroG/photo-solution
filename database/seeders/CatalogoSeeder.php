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

        Catalogo::create([
            'id_evento'=>2,
        ]);

        Catalogo::create([
            'id_evento'=>3,
        ]);

        Catalogo::create([
            'id_evento'=>4,
        ]);

        Catalogo::create([
            'id_evento'=>5,
        ]);

        Catalogo::create([
            'id_evento'=>6,
        ]);

        Catalogo::create([
            'id_evento'=>7,
        ]);

        Catalogo::create([
            'id_evento'=>8,
        ]);

        Catalogo::create([
            'id_evento'=>9,
        ]);

        Catalogo::create([
            'id_evento'=>10,
        ]);



    }
}
