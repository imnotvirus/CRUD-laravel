<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Model\ModelBook;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title' => 'Senhor dos aneis',
            'pages' => '100',
            'price' => '150.97',
            'id_user' => '1'
        ]);
        $book->create([
            'title' => 'Oticas',
            'pages' => '120',
            'price' => '50.97',
            'id_user' => '2'
        ]);

    }
}
