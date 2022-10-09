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
        //1
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

        //2
        Evento::create([
            'nombre_evento' => 'Cumpleaños',
            'direccion' => 'Av. Banzer 5to anillo',
            'fecha' => '2022-08-02',
            'hora' =>  '17:10:10',
            'estado' => 'Pagado',
            'id_fotografo' => 1,
            'id_organizador' => 3,
            'id_paquete' => 3,
        ]);

        //3
        Evento::create([
            'nombre_evento' => 'Baby Shower',
            'direccion' => 'Salon emperador',
            'fecha' => '2022-02-15',
            'hora' =>  '16:10:10',
            'estado' => 'Pagado',
            'id_fotografo' => 2,
            'id_organizador' => 1,
            'id_paquete' => 2,
        ]);

        //4
        Evento::create([
            'nombre_evento' => 'Matrimonio',
            'direccion' => 'Salon emperador',
            'fecha' => '2022-02-02',
            'hora' =>  '13:10:10',
            'estado' => 'Pagado',
            'id_fotografo' => 2,
            'id_organizador' => 3,
            'id_paquete' => 3,
        ]);

        //5
        Evento::create([
            'nombre_evento' => 'Cumpleaños',
            'direccion' => 'Av. Escruadron Velasco 2do anillo',
            'fecha' => '2022-02-15',
            'hora' =>  '18:10:10',
            'estado' => 'Pagado',
            'id_fotografo' => 1,
            'id_organizador' => 3,
            'id_paquete' => 3,
        ]);

        //6
        Evento::create([
            'nombre_evento' => 'Matrimonio',
            'direccion' => 'Salon emperador',
            'fecha' => '2022-02-02',
            'hora' =>  '20:10:10',
            'estado' => 'Pagado',
            'id_fotografo' => 3,
            'id_organizador' => 3,
            'id_paquete' => 3,
        ]);

        //7
        Evento::create([
            'nombre_evento' => 'Graduacion',
            'direccion' => 'Salon emperador',
            'fecha' => '2022-02-02',
            'hora' =>  '18:10:10',
            'estado' => 'Pagado',
            'id_fotografo' => 1,
            'id_organizador' => 3,
            'id_paquete' => 3,
        ]);

        //8
        Evento::create([
            'nombre_evento' => 'Graduacion',
            'direccion' => 'Salon Urubo',
            'fecha' => '2022-02-02',
            'hora' =>  '20:10:10',
            'estado' => 'Pagado',
            'id_fotografo' => 1,
            'id_organizador' => 1,
            'id_paquete' => 3,
        ]);

        //9
        Evento::create([
            'nombre_evento' => 'Matrimonio',
            'direccion' => 'Av. Pirai 3er Anillo',
            'fecha' => '2022-02-02',
            'hora' =>  '18:10:10',
            'estado' => 'Pagado',
            'id_fotografo' => 2,
            'id_organizador' => 1,
            'id_paquete' => 2,
        ]);

        //10
        Evento::create([
            'nombre_evento' => 'Cumpleaños',
            'direccion' => 'Av. Beni 5to anillo',
            'fecha' => '2022-02-02',
            'hora' =>  '21:10:10',
            'estado' => 'Pagado',
            'id_fotografo' => 4,
            'id_organizador' => 1,
            'id_paquete' => 1,
        ]);

    


        

    
    }
}
