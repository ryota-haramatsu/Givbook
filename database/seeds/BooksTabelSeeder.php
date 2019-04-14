<?php

use Illuminate\Database\Seeder;

class BooksTabelSeeder extends Seeder
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
                // 'image' => 
            ]);
    }
}
}
