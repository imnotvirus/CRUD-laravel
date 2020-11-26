<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('books')->insert([
                'title' => $faker->name,
                'pages' => rand(100, 200),
                'price' => rand(100, 200),
                'id_user' => rand(1, 3)
            ]);
        }

        //$this->call(BookSeeder::class);
    }
}
