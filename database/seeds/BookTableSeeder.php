<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Book;
class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete(); // ①
 
        $faker = Faker::create('en_US'); // ②
 
        for ($i = 0; $i < 10; $i++) {    // ③
            Book::create([
                'title' => $faker->sentence(),
                'comment' => $faker->paragraph(),
                'image' =>  $faker->sentence()
        ]);
    }
}
}
