<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photos')->insert([
            'title' => "7-aprel sanasida Abdulla Qodiriy tavalludining 130 yilligi munosabati bilan adabiy tadbir bo'lib o'tdi.",
            'image' => "photos/1.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photos')->insert([
            'title' => "7-aprel sanasida Abdulla Qodiriy tavalludining 130 yilligi munosabati bilan adabiy tadbir bo'lib o'tdi.",
            'image' => "photos/2.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photos')->insert([
            'title' => "7-aprel sanasida Abdulla Qodiriy tavalludining 130 yilligi munosabati bilan adabiy tadbir bo'lib o'tdi.",
            'image' => "photos/3.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photos')->insert([
            'title' => "7-aprel sanasida Abdulla Qodiriy tavalludining 130 yilligi munosabati bilan adabiy tadbir bo'lib o'tdi.",
            'image' => "photos/4.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photos')->insert([
            'title' => "7-aprel sanasida Abdulla Qodiriy tavalludining 130 yilligi munosabati bilan adabiy tadbir bo'lib o'tdi.",
            'image' => "photos/5.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photos')->insert([
            'title' => "7-aprel sanasida Abdulla Qodiriy tavalludining 130 yilligi munosabati bilan adabiy tadbir bo'lib o'tdi.",
            'image' => "photos/6.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photos')->insert([
            'title' => "7-aprel sanasida Abdulla Qodiriy tavalludining 130 yilligi munosabati bilan adabiy tadbir bo'lib o'tdi.",
            'image' => "photos/7.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('photos')->insert([
            'title' => "7-aprel sanasida Abdulla Qodiriy tavalludining 130 yilligi munosabati bilan adabiy tadbir bo'lib o'tdi.",
            'image' => "photos/8.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //
    }
}
