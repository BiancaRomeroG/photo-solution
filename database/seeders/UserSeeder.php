<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Mario',
            'apellido' => 'Paz Perez',
            'ci' => '8235900',
            'telefono' => '79080600',
            'email' => 'mario@gmail.com',
            'password' => bcrypt('12345678')
    ]);

    $user = User::create([
            'name' => 'Mariela',
            'apellido' => 'Cruz Perez',
            'ci' => '8235901',
            'telefono' => '79080601',
            'email' => 'mariela@gmail.com',
            'password' => bcrypt('12345678')
    ]);

    $user = User::create([
            'name' => 'Laura',
            'apellido' => 'Torrez Guerra',
            'ci' => '8235902',
            'telefono' => '79080602',
            'email' => 'laura@gmail.com',
            'password' => bcrypt('12345678')
    ]);

    $user = User::create([
            'name' => 'Kevin',
            'apellido' => 'Jarpa Flores',
            'ci' => '8235903',
            'telefono' => '79080603',
            'email' => 'kevin@gmail.com',
            'password' => bcrypt('12345678')
    ]);

    $user = User::create([
            'name' => 'Julia',
            'apellido' => 'Chavez Cuellar',
            'ci' => '8235904',
            'telefono' => '79080604',
            'email' => 'julia@gmail.com',
            'password' => bcrypt('12345678')
    ]);

    $user = User::create([
            'name' => 'Juan',
            'apellido' => 'Paco Chavez',
            'ci' => '8235905',
            'telefono' => '79080605',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('12345678')
    ]);

    $user = User::create([
            'name' => 'Raul',
            'apellido' => 'Vaca Paz',
            'ci' => '8235906',
            'telefono' => '79080606',
            'email' => 'raul@gmail.com',
            'password' => bcrypt('12345678')
    ]);

    
    }
}
