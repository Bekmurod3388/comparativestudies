<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            'title' => "Yevropa kutubxonalarida qanday noyob qo'lyozmalar saqlanmoqda?",
            'video_url' => "https://www.youtube.com/embed/B0hD4_TPAD4?si=FNSdpNeDiVREdhs9",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'title' => "Ilmiy anjuman",
            'video_url' => "about_videos/ANJUMAN NAVOIY PUSHKIN.mp4",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'title' => "Anjuman Navoiy Pushkin",
            'video_url' => "gallery_videos/video_2024-05-10_09-39-15.mp4",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'title' => "O'zDJTU Sharq filologiyasi fakulteti",
            'video_url' => "gallery_videos/video_2024-05-10_09-39-24.mp4",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
