<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            SessionsTableSeeder::class,
            EmployeesTableSeeder::class,
            Model_has_rolesTableSeeder::class,
            ServicesTableSeeder::class,
            PackagesTableSeeder::class,
            Package_serviceTableSeeder::class,
            Employee_serviceTableSeeder::class,
            AppointmentsTableSeeder::class,
            PaymentsTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
            ReactionsTableSeeder::class,
            FavoritesTableSeeder::class,
            AttendancesTableSeeder::class,
            BinnaclesTableSeeder::class,
        ]);
    }
}
