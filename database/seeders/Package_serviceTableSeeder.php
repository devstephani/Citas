<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Package_serviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_service')->insert([
            [
                'id' => 1,
                'package_id' => 1,
                'service_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 2,
                'package_id' => 1,
                'service_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 3,
                'package_id' => 2,
                'service_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 4,
                'package_id' => 2,
                'service_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
        ]);
    }
}
