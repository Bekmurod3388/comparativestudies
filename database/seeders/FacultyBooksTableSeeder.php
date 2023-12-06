<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FacultyBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('facultybooks')->insert([
                'book_name' => $faker->sentence,
                'authors' => $faker->name,
                'publication_date' => $faker->date,
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'image_url' => $faker->imageUrl,
                'file_url' => $faker->imageUrl,
                'created_at' => now(),
                // 'updated_at' => now(),
            ]);
        }
    }
}
