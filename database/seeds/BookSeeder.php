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
        for ($i = 0; $i < 10000; $i++) {
            $title = $faker->sentence(mt_rand(3, 6));
            $title = str_replace('.', '', $title);
            $books[$i] = [
                'book_name' => $title,
                'author' => $faker->name(100),
                'category' => $faker->word(300),
                'rating' => $faker->numberBetween(1, 500),
                'voter' => $faker->numberBetween(1, 5000),
            ];
        }
        DB::table('books')->insert($books);
    }
}
