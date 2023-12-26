<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResearchersBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('researchers_books')->insert([
            'researcher_id' => 1,
            'name' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
            'country' => "Toshkent",
//            'pub_date' => "2018",
//            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
//            'publisher' => "2018",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 1,
            'name' => " Ogahiy musammatlari",
            'country' => "Toshkent",
//            'pub_date' => "2018",
//            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
//            'publisher' => "2018",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 1,
            'name' => "Qiyosiy adabiyotshunoslik",
            'country' => "Toshkent",
//            'pub_date' => "2018",
//            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
//            'publisher' => "2018",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 1,
            'name' => "Karşılaştırmalı edebiyat",
            'country' => "Toshkent",
//            'pub_date' => "2018",
//            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
//            'publisher' => "2018",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 1,
            'name' => "Comparative literature critical studies",
            'country' => "Toshkent",
//            'pub_date' => "2018",
//            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
//            'publisher' => "2018",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 2,
            'name' => "The Problem of the Literary Time in the Historical Novels",
            'country' => "Germany",
//            'pub_date' => "2018",
            'pages' => 76,
            'publisher' => "LAP LAMBERT Academic Publishing",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 2,
            'name' => "Adabiyot nazariyasi. O‘quv qo‘llanma.",
            'country' => "Тоshkent",
//            'pub_date' => "2018",
            'pages' => 164,
            'publisher' => "«EFFECT-D» nashriyoti",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 2,
            'name' => "Adabiyotshunoslik. Darslik.",
            'country' => "Тоshkent",
//            'pub_date' => "2018",
            'pages' => 192,
            'publisher' => "«MALIK PRINT CO»",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 2,
            'name' => "Zamonaviy romanlarda xronotop poetikasi. Monografiya.",
            'country' => "Тоshkent",
//            'pub_date' => "2018",
            'pages' => 286,
            'publisher' => "«EFFECT-D» nashriyoti",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 2,
            'name' => "Edebiyat teorisi. (hammualliflikda).",
            'country' => "Germany",
//            'pub_date' => "2018",
            'pages' => 120,
            'publisher' => "Lambert Academic Publishing",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 2,
            'name' => "O‘zbek tarixiy romanlarida badiiy zamon konsepsiyasi. Monografiya.",
            'country' => "Тоshkent",
//            'pub_date' => "2018",
//            'pages' => 120,
//            'publisher' => "Lambert Academic Publishing",
            'created_at' => now(),
        ]);
        DB::table('researchers_books')->insert([
            'researcher_id' => 3,
            'name' => "Zamonaviy o’zbek she’riyati poetikasi (monografiya)",
//            'country' => "Тоshkent",
//            'pub_date' => "2018",
//            'pages' => 120,
//            'publisher' => "Lambert Academic Publishing",
            'created_at' => now(),
        ]);

    }
}
