<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            [
                'id' => 1,
                'appointment_id' => 1,
                'currency_api' => 67.86,
                'type' => 'FULL',
                'currency' => 'CASH',
                'ref' => NULL,
                'created_at' => '2025-03-20 22:01:29',
                'updated_at' => '2025-03-20 22:01:29',
            ],
            [
                'id' => 2,
                'appointment_id' => 2,
                'currency_api' => 67.86,
                'type' => 'FULL',
                'currency' => 'DOLLAR',
                'ref' => NULL,
                'created_at' => '2025-03-20 22:03:18',
                'updated_at' => '2025-03-20 22:03:18',
            ],
            [
                'id' => 3,
                'appointment_id' => 3,
                'currency_api' => 67.86,
                'type' => 'FULL',
                'currency' => 'DOLLAR',
                'ref' => NULL,
                'created_at' => '2025-03-20 22:18:38',
                'updated_at' => '2025-03-20 22:18:38',
            ],
            [
                'id' => 4,
                'appointment_id' => 4,
                'currency_api' => 67.86,
                'type' => 'FULL',
                'currency' => 'CASH',
                'ref' => NULL,
                'created_at' => '2025-03-20 22:20:10',
                'updated_at' => '2025-03-20 22:20:10',
            ],
            [
                'id' => 5,
                'appointment_id' => 5,
                'currency_api' => 67.86,
                'type' => 'FULL',
                'currency' => 'CASH',
                'ref' => NULL,
                'created_at' => '2025-03-20 23:54:14',
                'updated_at' => '2025-03-20 23:54:14',
            ],
            [
                'id' => 6,
                'appointment_id' => 6,
                'currency_api' => 67.86,
                'type' => 'FULL',
                'currency' => 'DOLLAR',
                'ref' => NULL,
                'created_at' => '2025-03-20 23:55:18',
                'updated_at' => '2025-03-20 23:55:18',
            ],
            [
                'id' => 7,
                'appointment_id' => 7,
                'currency_api' => 67.86,
                'type' => 'FULL',
                'currency' => 'CASH',
                'ref' => NULL,
                'created_at' => '2025-03-21 00:12:12',
                'updated_at' => '2025-03-21 00:12:12',
            ],
            [
                'id' => 8,
                'appointment_id' => 8,
                'currency_api' => 67.86,
                'type' => 'FULL',
                'currency' => 'DOLLAR',
                'ref' => NULL,
                'created_at' => '2025-03-21 00:13:10',
                'updated_at' => '2025-03-21 00:13:10',
            ],
            [
                'id' => 9,
                'appointment_id' => 9,
                'currency_api' => 68.31,
                'type' => 'PAYPAL',
                'currency' => 'DOLLAR',
                'ref' => '1000',
                'created_at' => '2025-03-21 17:19:35',
                'updated_at' => '2025-03-21 17:19:35',
            ],
            [
                'id' => 10,
                'appointment_id' => 10,
                'currency_api' => 68.31,
                'type' => 'MOBILE',
                'currency' => 'CASH',
                'ref' => '1000',
                'created_at' => '2025-03-21 17:19:51',
                'updated_at' => '2025-03-21 17:19:51',
            ],
            [
                'id' => 11,
                'appointment_id' => 11,
                'currency_api' => 68.31,
                'type' => 'FULL',
                'currency' => 'CASH',
                'ref' => NULL,
                'created_at' => '2025-03-21 17:41:39',
                'updated_at' => '2025-03-21 17:41:39',
            ],
            [
                'id' => 12,
                'appointment_id' => 12,
                'currency_api' => 68.31,
                'type' => 'FULL',
                'currency' => 'DOLLAR',
                'ref' => NULL,
                'created_at' => '2025-03-21 17:41:49',
                'updated_at' => '2025-03-21 17:41:49',
            ],
            [
                'id' => 13,
                'appointment_id' => 13,
                'currency_api' => 68.31,
                'type' => 'FULL',
                'currency' => 'CASH',
                'ref' => NULL,
                'created_at' => '2025-03-21 18:45:53',
                'updated_at' => '2025-03-21 18:45:53',
            ],
        ]);
    }
}
