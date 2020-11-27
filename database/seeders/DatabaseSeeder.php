<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*$faker2 = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('users')->insert([
                'name' => $faker2->name,
                'email' => $faker2->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                ]);
            }*/
     $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('books')->insert([
                'title' => $faker->sentence,
                'pages' => rand(100, 200),
                'price' => rand(100, 200),
                'id_user' => rand(1, 100)
            ]);
        }

        //$this->call(BookSeeder::class);
    }
}
