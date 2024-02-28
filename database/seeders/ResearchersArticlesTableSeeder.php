<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResearchersArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abstracts = [
            [
                'article_topic' => 'XORAZM MA`MUN AKADEMIYASI AXBOROTNOMASI',
                'authors' => 'Abdullayev Ikram Iskandarovich',
                'article_type' => "Oak",
                'protection_year' => '2022-10/4',
                'file_url' => 'researcher_articles/files/Mamun vak maqola.pdf',
                'photo_url' => "researcher_articles/photos/img.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_topic' => 'About The Manuscript Of "Ma\'arifun Nasab" By Babajon Sanoy, The Single Copy Of Which Is Kept In The State Library Of Berlin',
                'authors' => 'Hallieva Gulnoz Iskandarovna, Zohidov Rashid Fozilovich, Adambaeva Nargiza Kadambaevna',
                'article_type' => "Scopus",
                'protection_year' => '2023-7/3',
                'file_url' => 'researcher_articles/files/10796-14653-1-PB (2).pdf',
                'photo_url' => "researcher_articles/photos/img_1.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_topic' => 'ORIENTAL LITERATURE IN THE EYES OF REYNOLD NICHOLSON',
                'authors' => 'Hallieva Gulnoz Iskandarovna, Kholikov Zokhidjon Olimjonovich, Samandarov Sherzod Sultanovich',
                'article_type' => "Scopus",
                'protection_year' => '2023-6/3',
                'file_url' => 'researcher_articles/files/Article Translation 2023 scoups.pdf',
                'photo_url' => "researcher_articles/photos/img_2.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_topic' => 'ASEAN JOURNAL ON SCIENCE & TECHNOLOGY FOR DEVELOPMENT',
                'authors' => 'Hallieva Gulnoz Iskandarovna, Kholikov Zokhidjon Olimjonovich, Samandarov Sherzod Sultanovich',
                'article_type' => "Scopus",
                'protection_year' => '2023-6/3',
                'file_url' => 'researcher_articles/files/CamScanner 03-04-2023. scoups.pdf',
                'photo_url' => "researcher_articles/photos/img_3.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        //
        DB::table('researchers_articles')->insert($abstracts);
    }
}
