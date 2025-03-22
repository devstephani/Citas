<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'ref' => '000000',
            'doc' => 'V'
        ])->assignRole('admin');

        User::create([
            'name' => 'Admin',
            'email' => 'browslashes.stefy@gmail.com',
            'password' => Hash::make('stefy'),
            'ref' => '22339147',
            'doc' => 'V'
        ])->assignRole('admin');

        User::create([
            'name' => 'Cliente',
            'email' => 'user@email.com',
            'password' => Hash::make('password'),
            'ref' => '999999999',
            'doc' => 'V'
        ])->assignRole('client');
    }
}
