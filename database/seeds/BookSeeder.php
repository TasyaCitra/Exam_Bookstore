<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $title = $faker->sentence(mt_rand(3, 6));
            $title = str_replace('.', '', $title);
            $books[$i] = [
                'book_name' => $title,
                'author' => $faker->name,
                'category' => $faker->word,
                'rating' => mt_rand(1, 10),
                'voter' => mt_rand(1, 500),
            ];
        }
        DB::table('books')->insert($books);
    }
}
