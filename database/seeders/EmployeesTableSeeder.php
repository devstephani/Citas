<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'id' => 1,
                'description' => 'Lashista, Trabaja en el área de cejas, pestañas y depilación coorporal.',
                'photo' => 'stefy.jpg',
                'user_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 18:36:29',
                'updated_at' => '2025-03-20 18:36:29',
            ],
            [
                'id' => 2,
                'description' => 'Maquillador profesional y creador de contenido en el área de la Belleza de la mujer sobre (Makeup).',
                'photo' => 'jose.jpg',
                'user_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 18:36:30',
                'updated_at' => '2025-03-20 18:36:30',
            ],
            [
                'id' => 3,
                'description' => 'Peinadora para toda clase de eventos tanto para niñas y adultos.',
                'photo' => 'alexandra.jpg',
                'user_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 18:36:30',
                'updated_at' => '2025-03-20 18:36:30',
            ],
        ]);
    }
}
