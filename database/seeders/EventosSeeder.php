<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
            'nombre_evento' => 'Matrimonio',
            'direccion' => 'Av. Beni',
            'fecha' => '2022-02-02',
            'hora' =>  '13:10:10',
            'estado' => 'Sin pagar',
            'id_fotografo' => 1,
            'id_organizador' => 2,
            'id_paquete' => 1,
        ]);

    
    }
}
