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
            'title' => "Yevropa kutubxonalarida qanday noyob qo'lyozmalar saqlanmoqda?",
            'url' => "https://www.youtube.com/embed/B0hD4_TPAD4?si=FNSdpNeDiVREdhs9",
            'type' => "youtube",
            'img' => "about_photos/tWcYXClVXRlY6yrYJoaFDeZiuwL4TCdmGI2wBGh2.jpg",
            'created_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'title' => "АЛИШЕР НАВОИЙНИНГ ХОРИЖДА САҚЛАНАЁТГАН ҚЎЛЁЗМАЛАРИНИ АНИҚЛАШ ВА ЎРГАНИШ БОРАСИДАГИ ИШЛАР ҚАНДАЙ САМАРА БЕРМОҚДА?",
            'url' => "Янги Ўзбекистон №23.pdf",
            'type' => "gazeta",
            'img' => "about_photos/img_2.png",
            'created_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'title' => "“Farxod va Shirin” dostoni – lotin kitobxonlarining eng sevimli asari",
            'url' => "https://uza.uz/uz/posts/farhod-va-shirin-dostoni-lotish-kitobxonlarining-eng-sevimli-asari_567082",
            'type' => "sayt",
            'img' => "about_photos/img.png",
            'created_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'title' => "Oʻzbekiston davlat jahon tillari universiteti Jahon adabiyoti kafedrasiga biriktirilgan doktorantlar va mustaqil izlanuvchilar ilmiy maktabi ilmiy-nazariy seminarga taklif etadi!",
            'url' => "https://t.me/UzSWLU/16722",
            'type' => "sayt",
            'img' => "about_photos/img_1.png",
            'created_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'title' => "7-aprel sanasida Abdulla Qodiriy tavalludining 130 yilligi munosabati bilan adabiy tadbir bo'lib o'tdi.",
            'url' => "https://t.me/UzSWLU/17482",
            'type' => "sayt",
            'img' => "about_photos/3.jpg",
            'created_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'title' => 'O’zDJTU Sharq filologiyasi fakulteti Jahon adabiyot kafedrasi tomonidan tashkil etilgan "Jahon adabiyoti va qiyosiy adabiyotshunoslikning dolzarb masalalari" mavzusidagi xalqaro ilmiy-amaliy anjumandan videolavha.',
            'url' => "https://t.me/UzSWLU/19081",
            'type' => "sayt",
            'img' => "about_photos/img_3.png",
            'created_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'title' => 'Oʻzbekiston davlat jahon tillari universitetida davlat ilmiy-texnika dasturlari doirasida bajarilayotgan IL-27-4722022413-sonli “Qiyosiy adabiyotshunoslik” fanining “Komparativistika” elektron platformasini yaratish”',
            'url' => "https://t.me/UzSWLU/19607",
            'type' => "sayt",
            'img' => "about_photos/img_4.png",
            'created_at' => now(),
        ]);
    }
}
