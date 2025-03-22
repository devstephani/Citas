<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->insert([
            [
                'id' => 1,
                'user_id' => 15,
                'post_id' => 1,
                'created_at' => '2025-03-20 22:20:46',
                'updated_at' => '2025-03-20 22:20:46',
            ],
            [
                'id' => 2,
                'user_id' => 16,
                'post_id' => 1,
                'created_at' => '2025-03-20 23:55:59',
                'updated_at' => '2025-03-20 23:55:59',
            ],
        ]);
    }
}
