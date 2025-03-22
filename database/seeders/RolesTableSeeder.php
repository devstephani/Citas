<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2025-03-20 18:36:24',
                'updated_at' => '2025-03-20 18:36:24',
            ],
            [
                'id' => 2,
                'name' => 'client',
                'guard_name' => 'web',
                'created_at' => '2025-03-20 18:36:24',
                'updated_at' => '2025-03-20 18:36:24',
            ],
            [
                'id' => 3,
                'name' => 'employee',
                'guard_name' => 'web',
                'created_at' => '2025-03-20 18:36:24',
                'updated_at' => '2025-03-20 18:36:24',
            ],
        ]);
    }
}
