<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ColleaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $ignored) {
            DB::table('colleagues')->insert([
                'fullname' => $faker->name,
                'position' => $faker->jobTitle,
                'research_fields' => $faker->words(3, true),
                'photo' => "researcher_photos/example.png",
                'email' => $faker->unique()->safeEmail,
                'facebook_url' => $faker->url,
                'twitter_url' => $faker->url,
                'instagram_url' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
