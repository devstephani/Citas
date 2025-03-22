<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendances')->insert([
            [
                'id' => 1,
                'type' => 1,
                'employee_id' => 1,
                'created_at' => '2025-03-21 17:23:57',
                'updated_at' => '2025-03-21 17:23:57',
            ],
            [
                'id' => 2,
                'type' => 0,
                'employee_id' => 1,
                'created_at' => '2025-03-21 17:41:55',
                'updated_at' => '2025-03-21 17:41:55',
            ],
        ]);
    }
}
