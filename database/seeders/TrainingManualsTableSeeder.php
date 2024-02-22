<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingManualsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
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
        ];

        // Insert data into the 'abstracts' table
        DB::table('training_manuals')->insert($abstracts);
    }
}
