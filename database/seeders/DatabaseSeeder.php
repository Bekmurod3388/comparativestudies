<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Abstracts;
use App\Models\Dissertations;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ColleaguesTableSeeder::class,
            CarouselsTableSeeder::class,
            FacultyBooksTableSeeder::class,
            VideosTableSeeder::class,
            CenterTableSeeder::class,
            ResearchersTableSeeder::class,
            ResearchersBooksTableSeeder::class,
            JournalsTableSeeder::class,
            AboutTableSeeder::class,
            LocaleTableSeeder::class,
            AbstractTableSeeder::class,
            ArticleTableSeeder::class,
            MonographTableSeeder::class,
            DissertationsTableSeeder::class,
            ResearchersArticlesTableSeeder::class,
        ]);
    }
}
