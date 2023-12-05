<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('carousel')->insert([
                'title' => $faker->sentence,
                'img_url' => $faker->imageUrl(),
                'created_at' => now(),
            ]);
        }
    }
}
