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

        $user = User::create([
            'name' => $input['name'],
            'apellido' => $input['apellido'],
            'email' => $input['email'],
            'telefono' => $input['telefono'],
            'ci' => $input['ci'],
            'password' => Hash::make($input['password']),
        ]);

        if ($input['tipo'] == 'Fotografo') {
            $user->assignRole('Fotografo');

            Fotografo::create([
                'id_usuario' => $user->id,
                'nombre_studio' => $input['nombre_studio'],
            ]);
        }

        if ($input['tipo'] == 'Cliente') {
            $user->assignRole('Cliente');

            Cliente::create([
                'id_usuario' => $user->id,
            ]);      
        }
        return $user;
    }
}
