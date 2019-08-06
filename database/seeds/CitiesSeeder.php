<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'البدرشين',
            'governorate_id' => '1'
        ]);
        City::create([
            'name' => 'الحوامدية ',
            'governorate_id' => 1,

        ]);
        City::create([
            'name' => 'المنيل',
            'governorate_id' => 2,

        ]);
        City::create([
            'name' => 'مدينة نصر',
            'governorate_id' => 2
        ]);
        City::create([
            'name' => 'الحي السابع',
            'governorate_id' => 2
        ]);
    }
}
