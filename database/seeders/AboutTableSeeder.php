<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'title' => "Namuna",
            'url' => "https://www.youtube.com/embed/EtbWNdRYpnw?si=o6S5sb9ZxMT7_-v4",
            'type' => "youtube",
            'img' => "about_photos/tWcYXClVXRlY6yrYJoaFDeZiuwL4TCdmGI2wBGh2.jpg",
            'created_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'title' => "Namuna1",
            'url' => "https://ubtuit.uz",
            'type' => "sayt",
            'img' => "about_photos/tWcYXClVXRlY6yrYJoaFDeZiuwL4TCdmGI2wBGh2.jpg",
            'created_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'title' => "Namuna2",
            'url' => "https://ubtuit.uz",
            'type' => "gazeta",
            'img' => "about_photos/tWcYXClVXRlY6yrYJoaFDeZiuwL4TCdmGI2wBGh2.jpg",
            'created_at' => now(),
        ]);
    }
}
