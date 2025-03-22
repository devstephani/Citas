<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reactions')->insert([
            [
                'id' => 1,
                'rate' => 1,
                'user_id' => 13,
                'post_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 22:03:52',
                'updated_at' => '2025-03-20 22:03:52',
            ],
            [
                'id' => 2,
                'rate' => 1,
                'user_id' => 15,
                'post_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 22:20:43',
                'updated_at' => '2025-03-20 22:20:43',
            ],
            [
                'id' => 3,
                'rate' => 1,
                'user_id' => 16,
                'post_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 23:55:55',
                'updated_at' => '2025-03-20 23:55:55',
            ],
            [
                'id' => 4,
                'rate' => 1,
                'user_id' => 17,
                'post_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-21 00:13:42',
                'updated_at' => '2025-03-21 00:13:42',
            ],
        ]);
    }
}
