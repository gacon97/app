<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TravelSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(ImageEventTableSeeder::class);
    }
}
