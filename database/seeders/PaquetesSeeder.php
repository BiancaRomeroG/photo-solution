<?php

namespace Database\Seeders;

use App\Models\Paquetes;
use Illuminate\Database\Seeder;

class PaquetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paquetes::create([
            'nombre' => 'Basico',
            'precio' => '150 Bs',
            'cantidad_fotos' => '50',
            'descripcion' => 'Tomas de fotografia ilimitadas',
            'id_fotografo' => 1,
        ]);

        Paquetes::create([
            'nombre' => 'Estandar',
            'precio' => '300 Bs',
            'cantidad_fotos' => '100',
            'descripcion' => 'Tomas de fotografia ilimitadas',
            'id_fotografo' => 1,

        ]);

        Paquetes::create([
            'nombre' => 'Premium',
            'precio' => '500 Bs',
            'cantidad_fotos' => '250',
            'descripcion' => 'Tomas de fotografia ilimitadas',
            'id_fotografo' => 1,
        ]);
    }
}
