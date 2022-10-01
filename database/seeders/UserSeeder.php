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
                //1
                $user = User::create([
                        'name' => 'Mario',
                        'apellido' => 'Paz Perez',
                        'ci' => '8235900',
                        'telefono' => '79080600',
                        'email' => 'mario@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Fotografo');

                //2
                $user = User::create([
                        'name' => 'Mariela',
                        'apellido' => 'Cruz Perez',
                        'ci' => '8235901',
                        'telefono' => '79080601',
                        'email' => 'mariela@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Fotografo');

                //3
                $user = User::create([
                        'name' => 'Laura',
                        'apellido' => 'Torrez Guerra',
                        'ci' => '8235902',
                        'telefono' => '79080602',
                        'email' => 'laura@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Fotografo');

                //4
                $user = User::create([
                        'name' => 'Kevin',
                        'apellido' => 'Jarpa Flores',
                        'ci' => '8235903',
                        'telefono' => '79080603',
                        'email' => 'kevin@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Fotografo');

                //5
                $user = User::create([
                        'name' => 'Julia',
                        'apellido' => 'Chavez Cuellar',
                        'ci' => '8235904',
                        'telefono' => '79080604',
                        'email' => 'julia@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Fotografo');

                //6
                $user = User::create([
                        'name' => 'Juan',
                        'apellido' => 'Paco Chavez',
                        'ci' => '8235905',
                        'telefono' => '79080605',
                        'email' => 'juan@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Fotografo');

                //7
                $user = User::create([
                        'name' => 'Pedro',
                        'apellido' => 'Vaca Paz',
                        'ci' => '8235906',
                        'telefono' => '79080606',
                        'email' => 'pedro@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Organizador');

                //8
                $user = User::create([
                        'name' => 'Harold',
                        'apellido' => 'Vaca Paz',
                        'ci' => '8235906',
                        'telefono' => '79080606',
                        'email' => 'harold@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Organizador');

                //9
                $user = User::create([
                        'name' => 'Zalas',
                        'apellido' => 'Vaca Paz',
                        'ci' => '8235906',
                        'telefono' => '79080606',
                        'email' => 'zalas@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Organizador');
                
                //10
                $user = User::create([
                        'name' => 'Martha',
                        'apellido' => 'Zalazar Paz',
                        'ci' => '8235906',
                        'telefono' => '79080606',
                        'email' => 'martha@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                //11
                $user = User::create([
                        'name' => 'Francisco',
                        'apellido' => 'Terraza Paz',
                        'ci' => '8235906',
                        'telefono' => '79080606',
                        'email' => 'francisco@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');
        }
}
