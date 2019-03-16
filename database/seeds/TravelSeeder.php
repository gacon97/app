<?php

use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        \App\Models\Travel::truncate();
        $categories = \App\Models\Category::all();
        $limit = 50;
        for($i = 0; $i < $limit; $i++)
        {
            $category = $categories->random();

        	\App\Models\Travel::create([
            'category_id' => $category->id,
            'name' => $faker->text(20),
            'place' => $faker->country,
            'feature' => $faker->text(20)

            ]);
        }
    }
}
