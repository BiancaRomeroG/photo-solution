<?php

namespace Database\Seeders;

use App\Models\Fotografo;

use Illuminate\Database\Seeder;

class FotografosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Fotografo::create([
        'id_usuario' => 1,
        'nombre_studio' => 'Captura Fotografía'
       ]);

       Fotografo::create([
        'id_usuario' => 2,
        'nombre_studio' => 'Enfoca Foto'
       ]);

       Fotografo::create([
        'id_usuario' => 3,
        'nombre_studio' => 'Sonríe Cámara'
       ]);

       Fotografo::create([
        'id_usuario' => 4,
        'nombre_studio' => 'Foto Álbum Estudio'
       ]);

       Fotografo::create([
        'id_usuario' => 5,
        'nombre_studio' => 'Estudio Tripié'
       ]);

       Fotografo::create([
        'id_usuario' => 6,
        'nombre_studio' => 'Fotografía Mística'
       ]);

       
    }
}
