<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConventionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $abstracts = [
            [
                'name' => 'MAQOLA TALABLARI',
                'description' => '“Komparativistika” (Comparative Studies) ilmiy elektron jurnali fan nomzodlari va fan doktorlari, yosh olimlar, mustaqil tadqiqotchilar, o‘qituvchilar va  magistrantlarning qiyosiy adabiyotshunoslikning ilmiy-nazariy muammolari tahliliga bag‘ishlangan maqolalarini e’lon qilish uchun qabul qiladi.',
                'locale_id' => 1,
                'file_url' => 'convention_files/files/Низом ва мақола талаблари/Jurnal nizomi (2).pdf',
                'photo_url' => 'convention_files/photos/img.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '"KOMPORAVISTIKA" elektron platformasini yaratish',
                'description' => 'O`zbekiston davlat jahon tillari universitetida davlat ilmiy texnika dasturlari doirasida bajarilayotgan IL-27-4722022413-sonli "Qiyosiy adabiyotshunslik" fanining "Komporavistika" elektron platformasini yaratish" mavzusidagi innovatsion loyiha asosida tashkil etilgan',
                'locale_id' => 1,
                'file_url' => 'convention_files/files/Низом ва мақола талаблари/Maqola talablari 2024 (2).docx',
                'photo_url' => 'convention_files/photos/img_1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the 'conventions' table
        DB::table('conventions')->insert($abstracts);
    }
}
