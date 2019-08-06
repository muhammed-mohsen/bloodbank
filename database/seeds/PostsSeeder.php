<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'category_id' => '1',
            'title' => 'التبرع بالدم ينقذ حياة',
            'image' => 'muhammed.jpg',
            'content' => 'التبرع بالدم ينقذ حياة و انقاذ حياة يتوقف على التبرع بالدم',

        ]);
        Post::create([
            'category_id' => '2',
            'title' => 'الباعة الجائلين بطلو بيع حمير',
            'image' => 'muhammed.jpg',
            'content' => 'التبرع بالدم ينقذ حياة و انقاذ حياة يتوقف على التبرع بالدم',

        ]);
        Post::create([
            'category_id' => '3',
            'title' => 'العضل السليم فى الجسم السليم',
            'image' => 'muhammed.jpg',
            'content' => 'التبرع بالدم ينقذ حياة و انقاذ حياة يتوقف على التبرع بالدم',

        ]);
        Post::create([
            'category_id' => '1',
            'title' => 'التبرع بالدم ينقذ حياة',
            'image' => 'muhammed.jpg',
            'content' => 'التبرع بالدم ينقذ حياة و انقاذ حياة يتوقف على التبرع بالدم',

        ]);
    }
}
