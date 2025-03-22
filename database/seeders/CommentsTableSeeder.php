<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'id' => 1,
                'user_id' => 13,
                'post_id' => 1,
                'content' => 'Me encanta',
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 22:04:16',
                'updated_at' => '2025-03-21 18:41:17',
            ],
            [
                'id' => 2,
                'user_id' => 15,
                'post_id' => 1,
                'content' => 'Me gusta.',
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 22:21:04',
                'updated_at' => '2025-03-20 22:21:32',
            ],
            [
                'id' => 3,
                'user_id' => 16,
                'post_id' => 1,
                'content' => 'Me gusta como se ve',
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 23:56:25',
                'updated_at' => '2025-03-20 23:57:09',
            ],
            [
                'id' => 4,
                'user_id' => 17,
                'post_id' => 1,
                'content' => 'Me encanta..',
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-21 00:13:58',
                'updated_at' => '2025-03-21 18:37:14',
            ],
        ]);
    }
}
