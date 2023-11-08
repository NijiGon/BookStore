<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $size = 30;
        $extensions = ['.jpg', '.jpeg', '.png'];
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 4; $i++){
            DB::table('categories')->insert([
                'name' => $faker->word,
            ]);
        }
        for($i = 0; $i < 5; $i++){
            DB::table('publishers')->insert([
                'name' => $faker->name,
                'address' => $faker->address,
                // 08 15 1000 6494
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'image' => $faker->word . $extensions[$faker->numberBetween(0, 2)],
            ]);
        }
        for($i = 0; $i < $size; $i++){
            DB::table('books')->insert([
                'publisher_id' => $faker->numberBetween(1, Publisher::all()->count()),
                'title' => $faker->word,
                'author' => $faker->name,
                'year' => $faker->numberBetween(1970, 2023),
                'synopsis' => $faker->text(250),
                'image' => $faker->word . $extensions[$faker->numberBetween(0, 2)],
            ]);
        }
        for($i = 0; $i < $size; $i++){
            DB::table('book_categories')->insert([
                'book_id' => $faker->numberBetween(1, Book::all()->count()),
                'category_id' => $faker->numberBetween(1, Category::all()->count()),
            ]);
        }
    }
}
