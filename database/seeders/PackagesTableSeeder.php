<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'id' => 1,
                'name' => 'Cejas mas pestañas',
                'image' => 'public/packages/dsoeHW65q0KIXaZLqCCFwZJaVjI5yNAaNhbKI1rc.jpg',
                'description' => 'Pigmentación de cejas mas pestañas punto por punto volumen ruso(Colores).',
                'active' => 1,
                'price' => 12.0,
                'user_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 21:44:21',
                'updated_at' => '2025-03-20 21:44:21',
            ],
            [
                'id' => 2,
                'name' => 'Laminado mas pestañas.',
                'image' => 'public/packages/zGlZfOMUOpZNHSv0UnxqY8KmjL5we3ZKkWCP6rWY.jpg',
                'description' => 'Laminado de cejas y Pestañas punto por punto.',
                'active' => 1,
                'price' => 15.0,
                'user_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 21:47:14',
                'updated_at' => '2025-03-20 21:47:14',
            ],
        ]);
    }
}
