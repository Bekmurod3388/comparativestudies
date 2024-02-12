<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abstracts = [
            [
                'name' => 'The Concept of Influence in Comparative literature',
                'journal_name' => 'Penn State University Press',
                'locale_id' => 2,
                'authors' => 'A. Owen Aldridge, Anna Balakian, Claudio Guillén and Wolfgang Bernard Fleischmann',
                'file_url' => 'article_files/files/1. Brub-CulturalStudiesComparative-2005.pdf',
                'photo_url' => "article_files/photos/img_2.png",
                'published_date' => '2023-11-24 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cultural Studies and Comparative Literature?',
                'journal_name' => 'Penn State University Press',
                'locale_id' => 2,
                'authors' => 'Michael Bérubé',
                'file_url' => 'article_files/files/5. Aldridge-ConceptInfluenceComparative-1963.png',
                'photo_url' => "article_files/photos/img.png",
                'published_date' => '2023-11-24 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cultural Studies and Comparative Literature?',
                'journal_name' => 'Penn State University Press',
                'locale_id' => 2,
                'authors' => 'Michael Bérubé',
                'file_url' => 'article_files/files/5. Aldridge-ConceptInfluenceComparative-1963.png',
                'photo_url' => "article_files/photos/img.png",
                'published_date' => '2023-11-24 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cultural Studies and Comparative Literature?',
                'journal_name' => 'Penn State University Press',
                'locale_id' => 2,
                'authors' => 'Michael Bérubé',
                'file_url' => 'article_files/files/5. Aldridge-ConceptInfluenceComparative-1963.png',
                'photo_url' => "article_files/photos/img.png",
                'published_date' => '2023-11-24 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the 'abstracts' table
        DB::table('articles')->insert($abstracts);
    }
}
