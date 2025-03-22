<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Employee_serviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_service')->insert([
            [
                'id' => 1,
                'employee_id' => 1,
                'service_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 2,
                'employee_id' => 1,
                'service_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 3,
                'employee_id' => 1,
                'service_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 4,
                'employee_id' => 3,
                'service_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
        ]);
    }
}
