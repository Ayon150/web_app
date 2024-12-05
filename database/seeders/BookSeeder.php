<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for( $i = 0; $i < 10; $i++ ) {
        $faker = Faker::create();
        $book = new Book();
        $book->title = $faker->words(3, true);
        $book->author = $faker->name();
        $book->price = $faker->randomFloat(2, 0, 100);
        $book->qty = $faker->numberBetween(0, 1000);
        $book->pages = $faker->numberBetween(10, 1000);
        $book->save();
        }
    }
}
