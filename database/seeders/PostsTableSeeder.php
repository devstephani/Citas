<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'title' => 'Makeup ',
                'image' => 'public/posts/7A72mwo6SoAMzCmeSXsbILuiUQR5JZWbNdhJ3daA.jpg',
                'description' => 'Maquillaje sutil y natural para que puedas realizarte en tu día a día fácil y sencillo.',
                'content' => '<p>1 Hidratar tu cutis.</p>
<p>2 Aplicar tu proctetor solar.</p>
<p>3 Procede aplicar tu pre base o corrector.</p>
<p>4 Sella con polvo suelto o polvo compacto.</p>
<p>5 Fija con un fijador.</p>',
                'active' => 1,
                'user_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-03-20 21:51:14',
                'updated_at' => '2025-03-20 21:51:14',
            ],
        ]);
    }
}
