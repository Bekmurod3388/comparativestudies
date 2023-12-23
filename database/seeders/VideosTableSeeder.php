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
            'title' => "Video1",
            'video_url' => "https://youtu.be/9RhWXPcKBI8?si=mYDCUU-lqxKrMC5I",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'title' => "Video2",
            'video_url' => "https://youtu.be/0e3GPea1Tyg?si=4bBxE1jU-tUJuM1K",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
