<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'id' => 1,
                'name' => 'Trenzado',
                'type' => 'braiding',
                'image' => 'public/services/sdj0dAD8xm1RdKg7eL6zjkpPuas3IEzwi15F2lOU.jpg',
                'description' => 'Clinejas con extensiones de colores.',
                'active' => 1,
                'price' => 10.0,
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 18:36:29',
                'updated_at' => '2025-03-20 21:35:24',
            ],
            [
                'id' => 2,
                'name' => 'Cejas',
                'type' => 'eyebrows',
                'image' => 'public/services/Km6AyuyS5p9R2NobOwQZuyShZZaWPMhhvG7pXM4X.jpg',
                'description' => 'Pigmentación de cejas semipermanente.
Con henna',
                'active' => 1,
                'price' => 5.5,
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 18:36:29',
                'updated_at' => '2025-03-20 21:39:16',
            ],
            [
                'id' => 3,
                'name' => 'Pestañas',
                'type' => 'eyeslashes',
                'image' => 'public/services/yVnaVqbKHzQTFOffpe38QOskO1gs0DPjA2YxgUDI.jpg',
                'description' => 'Pestañas punto por puntos mega volumen.',
                'active' => 1,
                'price' => 5.0,
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 18:36:29',
                'updated_at' => '2025-03-20 21:37:50',
            ],
            [
                'id' => 4,
                'name' => 'Depilación',
                'type' => 'waxing',
                'image' => 'public/services/agaNAywH8mNMrG7a1vQbNG4QVFx9tCuwKeaXXA19.jpg',
                'description' => 'Depilación de cejas mas diseño.',
                'active' => 1,
                'price' => 2.5,
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 18:36:29',
                'updated_at' => '2025-03-20 21:40:53',
            ],
        ]);
    }
}
