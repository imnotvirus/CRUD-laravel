<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('books')->insert([
                'title' => $faker->sentence,
                'pages' => rand(100, 200),
                'price' => rand(100, 200),
                'id_user' => rand(1, 100)
            ]);
        }

    }
}
