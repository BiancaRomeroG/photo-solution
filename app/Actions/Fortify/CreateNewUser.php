<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

use App\Models\Cliente;
use App\Models\Fotografo;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'telefono' => ['required'],
            'apellido' => ['required', 'string', 'max:255'],
            'ci' => ['required', 'string', 'max:100'],
        ])->validate();

        if ($input['tipo'] == 'fotografo') {
            $user = User::create([
                'name' => $input['name'],
                'apellido' => $input['apellido'],
                'email' => $input['email'],
                'telefono' => $input['telefono'],
                'ci' => $input['ci'],
                'password' => Hash::make($input['password']),
            ])->assignRole('fotografo');

            Fotografo::create([
                'id_usuario' => $user->id,
                'nombre_studio' => $input['nombre_studio'],
            ]);

            if (request()->hasFile('photo')) {
                $photo = request()->file('photo')->getClientOriginalName();
                request()->file('photo')->storeAs('foto-perfil', $user->id .'/'. $photo, '');
                $user->update(['profile_photo_path' => 'storage/app/foto-perfil'. $user->id .'/'.$photo]);
            }
        }

        if ($input['tipo'] == 'cliente') {
            $user = User::create([
                'name' => $input['name'],
                'apellido' => $input['apellido'],
                'email' => $input['email'],
                'telefono' => $input['telefono'],
                'ci' => $input['ci'],
                'password' => Hash::make($input['password']),
            ])->assignRole('cliente');

            Cliente::create([
                'id_usuario' => $user->id,

            ]);

            
        }
        return $user;
    }
}
