<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'active' => true,
            'name' => 'Cliente',
            'phone' => '04125512151',
            'email' => 'cliente@email.com',
            'password' => Hash::make('password'),
        ])->assignRole('client');

        $phones = ['04121241212', '04144564545', '04161231231', '04247415421', '04124567832'];
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'active' => fake()->boolean(),
                'name' => fake()->name(),
                'phone' => $phones[$i],
                'email' => fake()->email(),
                'password' => Hash::make(fake()->password()),
            ])->assignRole('client');
        }
    }
}
