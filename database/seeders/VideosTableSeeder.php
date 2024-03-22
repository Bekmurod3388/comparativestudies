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
//        DB::table('videos')->insert([
//            'title' => "Video2",
//            'video_url' => "https://www.youtube.com/embed/lOKASgtr6kU?si=rD9wnhSoXVrgwaw1",
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
    }
}
