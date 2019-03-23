<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::truncate();
        
        $factories = ['beach', 'mountain', 'river', 'lake', 'pagoda', 'restaurent', 'road', 'street'];

        for($i=0; $i<count($factories); $i++)
        {
                \App\Models\Category::create([
                 'name' => $factories[$i],
             ]);
        }
    }
}
