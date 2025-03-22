<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'regex:/^[0-9]+$/', 'digits:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'ref' => ['required', 'regex:/^[0-9]+$/', 'max:10', 'min:6'],
            'doc' => ['required', 'in:J,G,E,V'],
        ], $this->messages())->validate();

        return User::create([
            'name' => $input['name'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'ref' => $input['ref'],
            'doc' => $input['doc'],
        ])->assignRole('client');
    }

    public function messages()
    {
        return [
            'name.required' => 'Debe indicar el nombre',
            'name.string' => 'Debe ser un texto',
            'name.max' => 'Debe contener máximo :max caracteres',
            'phone.required' => 'Debe indicar el teléfono',
            'phone.regex' => 'Debe contener solo dígitos',
            'phone.digits' => 'Debe contener 11 dígitos',
            'email.required' => 'Debe indicar el correo electrónico',
            'email.string' => 'Debe ser un texto',
            'email.email' => 'Debe ser un correo electrónico válido',
            'email.max' => 'Debe contener máximo :max caracteres',
            'email.unique' => 'Este correo ya se encuentra registrado',
            'password.required' => 'Debe indicar la contraseña',
            'password.string' => 'Debe ser un texto',
            'ref.required' => 'Debe indicar la cédula',
            'ref.regex' => 'Debe contener solo dígitos',
            'ref.max' => 'Debe contener máximo 10 dígitos',
            'ref.min' => 'Debe contener mínimo 6 dígitos',
            'doc.required' => 'Debe seleccionar un tipo de documento',
            'doc.in' => 'La opción seleccionada es inválida'
        ];
    }
}
