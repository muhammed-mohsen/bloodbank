<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'التبرع بالدم',
        ]);
        Category::create([
            'name' => 'الباعة الجائلين',
        ]);
        Category::create([
            'name' => 'الرياضة',
        ]);
    }
}
