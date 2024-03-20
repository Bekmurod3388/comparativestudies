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
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 1,
//            'name' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
//            'country' => "Toshkent",
////            'pub_date' => "2018",
////            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
////            'publisher' => "2018",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 1,
//            'name' => " Ogahiy musammatlari",
//            'country' => "Toshkent",
////            'pub_date' => "2018",
////            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
////            'publisher' => "2018",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 1,
//            'name' => "Qiyosiy adabiyotshunoslik",
//            'country' => "Toshkent",
////            'pub_date' => "2018",
////            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
////            'publisher' => "2018",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 1,
//            'name' => "Karşılaştırmalı edebiyat",
//            'country' => "Toshkent",
////            'pub_date' => "2018",
////            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
////            'publisher' => "2018",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 1,
//            'name' => "Comparative literature critical studies",
//            'country' => "Toshkent",
////            'pub_date' => "2018",
////            'pages' => "XX Rossiya sharqshunosligi va oʼzbek mumtoz adabiyoti",
////            'publisher' => "2018",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 2,
//            'name' => "The Problem of the Literary Time in the Historical Novels",
//            'country' => "Germany",
////            'pub_date' => "2018",
//            'pages' => 76,
//            'publisher' => "LAP LAMBERT Academic Publishing",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 2,
//            'name' => "Adabiyot nazariyasi. O‘quv qo‘llanma.",
//            'country' => "Тоshkent",
////            'pub_date' => "2018",
//            'pages' => 164,
//            'publisher' => "«EFFECT-D» nashriyoti",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 2,
//            'name' => "Adabiyotshunoslik. Darslik.",
//            'country' => "Тоshkent",
////            'pub_date' => "2018",
//            'pages' => 192,
//            'publisher' => "«MALIK PRINT CO»",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 2,
//            'name' => "Zamonaviy romanlarda xronotop poetikasi. Monografiya.",
//            'country' => "Тоshkent",
////            'pub_date' => "2018",
//            'pages' => 286,
//            'publisher' => "«EFFECT-D» nashriyoti",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 2,
//            'name' => "Edebiyat teorisi. (hammualliflikda).",
//            'country' => "Germany",
////            'pub_date' => "2018",
//            'pages' => 120,
//            'publisher' => "Lambert Academic Publishing",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 2,
//            'name' => "O‘zbek tarixiy romanlarida badiiy zamon konsepsiyasi. Monografiya.",
//            'country' => "Тоshkent",
////            'pub_date' => "2018",
////            'pages' => 120,
////            'publisher' => "Lambert Academic Publishing",
//            'created_at' => now(),
//        ]);
//        DB::table('researchers_books')->insert([
//            'researcher_id' => 3,
//            'name' => "Zamonaviy o’zbek she’riyati poetikasi (monografiya)",
////            'country' => "Тоshkent",
////            'pub_date' => "2018",
////            'pages' => 120,
////            'publisher' => "Lambert Academic Publishing",
//            'created_at' => now(),
//        ]);

        $abstracts = [
//            [
//                'name' => 'СРАВНИТЕЛЬНОЕ ЛИТЕРАТУРОВЕДЕНИЕ Современные тенденции русской литературной компаративистики',
//                'publisher' => 'Владимир 2022',
//                'locale_id' => 8,
//                'authors' => 'Г. Т. ГАРИПОВА Э. Ф. ШАФРАНСКАЯ',
//                'file_url' => 'training_manual_files/files/Garipova_i_SHafranskaja_Sravnitelnoe_literaturovedenie.pdf',
//                'photo_url' => "training_manual_files/photos/img.png",
//                'published_date' => '2022-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'СРАВНИТЕЛЬНО-ИСТОРИЧЕСКОЕ ЛИТЕРАТУРОВЕДЕНИЕ',
//                'publisher' => 'Москва Издательство «ФЛИНТА» 2011',
//                'locale_id' => 8,
//                'authors' => 'Я.В. Погребная',
//                'file_url' => 'training_manual_files/files/Pogrebnaya_Ya_V_-_Sravnitelno-istoricheskoe_literaturovedenie__Elektronny_resurs_ucheb_posobie_-_2011.pdf',
//                'photo_url' => "training_manual_files/photos/img_1.png",
//                'published_date' => '2011-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'СРАВНИТЕЛЬНОЕ ЛИТЕРАТУРОВЕДЕНИЕ: из практики сравнительно-типологического и сравнительно-сопоставительного анализа',
//                'publisher' => 'Кишинэу – 2020',
//                'locale_id' => 8,
//                'authors' => 'Габриэлла Топор',
//                'file_url' => 'training_manual_files/files/Studii_LiteraturaComparativa_Ru.pdf',
//                'photo_url' => "training_manual_files/photos/img_2.png",
//                'published_date' => '2020-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'ТЕОРЕТИЧЕСКИЕ ОСНОВЫ СРАВНИТЕЛЬНОГО И СОПОСТАВИТЕЛЬНОГО ЛИТЕРАТУРОВЕДЕНИЯ',
//                'publisher' => 'Казань - 2014',
//                'locale_id' => 8,
//                'authors' => 'В.Р. АМИНЕВА',
//                'file_url' => 'training_manual_files/files/Аминева В.pdf',
//                'photo_url' => "training_manual_files/photos/img_3.png",
//                'published_date' => '2014-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'ТЕОРЕТИЧЕСКИЕ ОСНОВЫ СРАВНИТЕЛЬНОГО И СОПОСТАВИТЕЛЬНОГО ЛИТЕРАТУРОВЕДЕНИЯ',
//                'publisher' => 'Казань - 2014',
//                'locale_id' => 8,
//                'authors' => 'В.Р. АМИНЕВА',
//                'file_url' => 'training_manual_files/files/Аминева Теор основы сравнит литведения.pdf',
//                'photo_url' => "training_manual_files/photos/img_3.png",
//                'published_date' => '2014-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'ПРЕЕМСТВЕННОСТЬ ЛИТЕРАТУРНОГО РАЗВИТИЯ И ВЗАИМОДЕЙСТВИЕ ЛИТЕРАТУР',
//                'publisher' => 'Уфа 2006',
//                'locale_id' => 8,
//                'authors' => 'Т.Л. Селитрина',
//                'file_url' => 'training_manual_files/files/Преемственность литературного развития и взаимодействие литератур (Селитрина Т.Л.Рец. Калимуллина В.М. etc.) (Z-Library).pdf',
//                'photo_url' => "training_manual_files/photos/img_4.png",
//                'published_date' => '2006-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'Принципы сравнительного литературоведения',
//                'publisher' => 'Издательство «Прогресс», Москва 1977',
//                'locale_id' => 8,
//                'authors' => 'Александр Дима',
//                'file_url' => 'training_manual_files/files/Принципы_сравнительного_литературоведения.pdf',
//                'photo_url' => "training_manual_files/photos/img_5.png",
//                'published_date' => '1977-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'СРАВНИТЕЛЬНОЕ ЛИТЕРАТУРОВЕДЕНИЕ Современные тенденции русской литературной компаративистики',
//                'publisher' => 'Владимир 2022',
//                'locale_id' => 8,
//                'authors' => 'Г. Т. ГАРИПОВА Э. Ф. ШАФРАНСКАЯ',
//                'file_url' => 'training_manual_files/files/СРАВНИТЕЛЬНОЕ_ЛИТЕРАТУРОВЕДЕНИЕ.pdf',
//                'photo_url' => "training_manual_files/photos/img_7.png",
//                'published_date' => '2022-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'Сравнительное литературоведение. Хрестоматия',
//                'publisher' => 'Тюмень Издательство Tюменского государственного университета 2011',
//                'locale_id' => 8,
//                'authors' => 'Г. И. Данилина (отв. ред.), В. Н. Сушкова, Л. И. Липская, Н. Ф. Швейбельман,		 Е. Л. Клименко, Н. В. Горбунова, А. А. Зинченко',
//                'file_url' => 'training_manual_files/files/Сравнительное литературоведение. Хрестоматия (Данилина Г.И. (отв. ред.)) (Z-Library).pdf',
//                'photo_url' => "training_manual_files/photos/img_8.png",
//                'published_date' => '2011-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'СРАВНИТЕЛЬНОЕ ЛИТЕРАТУРОВЕДЕНИЕ Учебно-методическое пособие',
//                'publisher' => 'Воронеж Издательский дом ВГУ 2016',
//                'locale_id' => 8,
//                'authors' => 'Д. А. Чугунов',
//                'file_url' => 'training_manual_files/files/Сравнительное_литературоведение_110_.pdf',
//                'photo_url' => "training_manual_files/photos/img_9.png",
//                'published_date' => '2016-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'СРАВНИТЕЛЬНОЕ ЛИТЕРАТУРОВЕДЕНИЕ Учебно-методическое пособие',
//                'publisher' => 'Воронеж Издательский дом ВГУ 2016',
//                'locale_id' => 8,
//                'authors' => 'Д. А. Чугунов',
//                'file_url' => 'training_manual_files/files/Чугунов Сравнительное литературоведение (пособие).pdf',
//                'photo_url' => "training_manual_files/photos/img_10.png",
//                'published_date' => '2016-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'name' => 'KARŞILAŞTIRMALI EDEBİYAT Çocuk Edebiyatında Göç',
//                'publisher' => 'hiperyayin',
//                'locale_id' => 15,
//                'authors' => 'Doç. Dr. İrfan ATALAY',
//                'file_url' => 'training_manual_files/files/KARSILASTIRMALI_EDEBIYAT  Ifran.pdf',
//                'photo_url' => "training_manual_files/photos/img_11.png",
//                'published_date' => '2019-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
            [
                'name' => 'Karşılaştırmalı Edebiyat',
                'publisher' => 'TOSHKENT 2020',
                'locale_id' => 15,
                'authors' => 'Prof.Dr. Gulnoz XALLIYEVA',
                'file_url' => 'training_manual_files/files/KARSILASTIRMALI_EDEBIYAT_turk_60_90.pdf',
                'photo_url' => "training_manual_files/photos/img_12.png",
                'published_date' => '2020-12-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
//            [
//                'name' => 'Qiyosi Adabiyotshunoslik',
//                'publisher' => 'Barkamol fayz media',
//                'locale_id' => 1,
//                'authors' => 'A.Qosimov, A.Hamroqulov, S.Xo`jayev',
//                'file_url' => 'training_manual_files/files/A Qosimov. Qiyosiy adabiyotshunoslik.pdf',
//                'photo_url' => "training_manual_files/photos/img_13.png",
//                'published_date' => '2019-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
            [
                'name' => 'QIYOSIY ADABIYOTSHUNOSLIK',
                'publisher' => 'Toshkent 2020',
                'locale_id' => 1,
                'authors' => 'Gulnoz XALLIYEVA',
                'file_url' => 'training_manual_files/files/G_XALLIYEVA_Qiyosiy_adabiyotshunoslik_O\'quv_qo\'llanma.pdf',
                'photo_url' => "training_manual_files/photos/img_14.png",
                'published_date' => '2020-12-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'COMPARATIVE LITERATURE',
                'publisher' => 'FENOMEN YAYINCILIK',
                'locale_id' => 2,
                'authors' => 'Gulnoz Khalliyeva Bahodir Kholikov',
                'file_url' => 'training_manual_files/files/COMPERATIVE LİTERATURE - DOÇ. BAŞVURU.pdf',
                'photo_url' => "training_manual_files/photos/img_15.png",
                'published_date' => '2022-12-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
//            [
//                'name' => 'Degrees of Affinity Studies in Comparative Literature and Translation',
//                'publisher' => 'China Academic Library',
//                'locale_id' => 2,
//                'authors' => 'Zuoliang Wang',
//                'file_url' => 'training_manual_files/files/Zuoliang Wang Degrees.pdf',
//                'photo_url' => "training_manual_files/photos/img_16.png",
//                'published_date' => '2022-12-01 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
        ];

        // Insert data into the 'abstracts' table
        DB::table('researchers_books')->insert($abstracts);
    }
}
