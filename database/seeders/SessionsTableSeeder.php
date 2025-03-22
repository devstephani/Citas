<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            [
                'id' => 'MquBQ7HpGItY6r2yiZmY8nMxkutRXpkore52LPNY',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
                'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:132.0) Gecko/20100101 Firefox/132.0',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSFZQbE80UFNWU2VkZmltTVBIV3RITTUxalc1aWp6RU5lc05OeFFIWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJFNwNkYxUWtOS1R5dmJzMDZFaTR2UC5aaE9rZGJrd3VTNkZRWXlqODl5Y3ZwOU9oeUJIdm1pIjt9',
                'last_activity' => 1742593386,
            ],
            [
                'id' => 'yvDpiDYZfD1DE9jObPWNMCYDjcyToDxaw5pjRb6v',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
                'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:132.0) Gecko/20100101 Firefox/132.0',
                'payload' => 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRzJaeXZlVVNVU241Nno3VGJMeUlMZkpGMVpjVG14ODR0NndBVktETiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBwb2ludG1lbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRTcDZGMVFrTktUeXZiczA2RWk0dlAuWmhPa2Ria3d1UzZGUVl5ajg5eWN2cDlPaHlCSHZtaSI7fQ==',
                'last_activity' => 1742597157,
            ],
        ]);
    }
}
