<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonographTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abstracts = [
            [
                'name' => 'Studies in the Lancelot legend',
                'publisher' => 'William Marsh Rice University',
                'locale_id' => 2,
                'authors' => 'Ernst Soudek',
                'file_url' => 'monograph_files/files/monograph.pdf',
                'photo_url' => "monograph_files/photos/img.png",
                'published_date' => '1972-12-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Literature and the Making of the World',
                'publisher' => 'BLOOMSBURY ACADEMIC Bloomsbury Publishing Inc',
                'locale_id' => 2,
                'authors' => 'Stefan Helgesson, Helena Bodin and Annika Mörte Alling',
                'file_url' => 'monograph_files/files/9781501374173_web.pdf',
                'photo_url' => "monograph_files/photos/img_1.png",
                'published_date' => '1972-12-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'СРАВНИТЕЛЬНОЕ ЛИТЕРАТУРОВЕДЕНИЕ',
                'publisher' => 'ЛЕНИНГРАД «НАУКА» ЛЕНИНГРАДСКОЕ ОТДЕЛЕНИЕ 1979',
                'locale_id' => 8,
                'authors' => 'В. М. ЖИРМУНСКИЙ',
                'file_url' => 'monograph_files/files/sravnitelnoe_literaturovedenie_vostok_i_.pdf',
                'photo_url' => "monograph_files/photos/img_2.png",
                'published_date' => '1979-01-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'транснациональная история компаративизма',
                'publisher' => 'Москва ИМЛИ РАН 2013',
                'locale_id' => 8,
                'authors' => 'В. М. ЖИРМУНСКИЙ',
                'file_url' => 'monograph_files/files/МОНОГРАФИЯ рус киесийдан.pdf',
                'photo_url' => "monograph_files/photos/img_3.png",
                'published_date' => '2009-010-09 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the 'abstracts' table
        DB::table('monographs')->insert($abstracts);
    }
}
