<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JournalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        1 = yevropa, 2 = AQSH, 3 = Turkiya, 4 = Rossiya, 5 = Markaziy osiyo
        DB::table('journals')->insert(
            [
                'name' => "Imagologica",
                'description' => "Dedicated to the critical study of national stereotypes.",
                'site_url' => "https://imagologica.eu/",
                'img_url' => "1.png",
                'category' => "1",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "	Comparative literature",
                'description' => "NYU Libraries",
                'site_url' => "https://getit.library.nyu.edu/",
                'img_url' => "2.svg",
                'category' => "1",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Comparative Literature: East & West",
                'description' => "This open access journal publishes research on East-West comparative and world literature",
                'site_url' => "https://www.tandfonline.com/journals/rcle20",
                'img_url' => "4.jpg",
                'category' => "1",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "	Advanced Literary Study",
                'description' => "An Academic Publisher",
                'site_url' => "als@scirp.org",
                'img_url' => "3.jpg",
                'category' => "1",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Comparative Literature",
                'description' => "Comparative Literature is wholly owned and directed by the University of Oregon.",
                'site_url' => "https://read.dukeupress.edu/comparative-literature",
                'img_url' => "5.png",
                'category' => "2",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Comparative Literature Studies",
                'description' => "Founded in 1963, Comparative Literature Studies publishes critical comparative essays on literature",
                'site_url' => "https://complit.la.psu.edu/journals/comparative-literature-studies/",
                'img_url' => "6.png",
                'category' => "2",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Comparative Literature Studies",
                'description' => "Founded in 1963, Comparative Literature Studies publishes critical comparative essays on literature",
                'site_url' => "https://cl-studies.la.psu.edu/",
                'img_url' => "7.png",
                'category' => "2",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Brown University Library- Comparative Literature",
                'description' => "The MLA Directory of Periodicals, produced by the Modern Language Association of America",
                'site_url' => "https://libguides.brown.edu/comparative_literature/journals",
                'img_url' => "8.png",
                'category' => "2",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Edebiyat",
                'description' => "Journal of Near Eastern Literatures",
                'site_url' => "http://www.edebiyat-thejournal.com/ ",
                'img_url' => "9.gif",
                'category' => "3",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Turk Bitig Kultur Arastirmalari  Dergisi ",
                'description' => "TURKBITIG Journal of Cultural Studies",
                'site_url' => "https://turkbitigdergisi.com/?mod=sayfabilgi&sayfa_alias=Aim%20and%20Content",
                'img_url' => "9.png",
                'category' => "3",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "	Comparative Literature in Turkey",
                'description' => "Irzık, Sibel and Parla, Jale (2017) Comparative literature in Turkey.",
                'site_url' => "https://research.sabanciuniv.edu/id/eprint/32886/",
                'img_url' => "10.jpg",
                'category' => "3",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Turkish Studies – Language and Literature",
                'description' => "Turkish Studies-Language and Literature ",
                'site_url' => "https://turkishstudies.net/language?mod=sayfabilgi&sayfa_alias=About%20the%20Journal",
                'img_url' => "11.png",
                'category' => "3",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Assonance:  A Journal of Russian & Comparative Literary Studies",
                'description' => "Assonance is an ISSN multilingual refereed blind peer-reviewed U G C Care-listed annual publication of the Department of Russian & Comparative Literature, University of Calicut.",
                'site_url' => "https://russian.uoc.ac.in/index.php/2016-06-16-10-20-34/2017-08-14-10-57-47 ",
                'img_url' => "12.png",
                'category' => "4",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "ВЕСТНИК РОССИЙСКОГО УНИВЕРСИТЕТА ДРУЖБЫ НАРОДОВ СЕРИЯ: ЛИТЕРАТУРОВЕДЕНИЕ. ЖУРНАЛИСТИКА",
                'description' => "ВЕСТНИК РОССИЙСКОГО УНИВЕРСИТЕТА ДРУЖБЫ НАРОДОВ.СЕРИЯ: ЛИТЕРАТУРОВЕДЕНИЕ. ЖУРНАЛИСТИКА",
                'site_url' => "https://journals.rudn.ru/literary-criticism/issue/viewIssue/1674/778 ",
                'img_url' => "13.png",
                'category' => "4",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Imagologiya I komparavistika",
                'description' => "Журнал «Имагология и компаративистика» основан в 2014 году по инициативе кафедры русской и зарубежной литературы Томского государственного университета",
                'site_url' => "http://journals.tsu.ru/imago/",
                'img_url' => "14.jpg",
                'category' => "4",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Novoe literaturnoe obozrenie ",
                'description' => "Новое литературное обозрение",
                'site_url' => "https://www.nlobooks.ru/",
                'img_url' => "15.svg",
                'category' => "4",
                'created_at' => now(),
            ]
        );
//        DB::table('journals')->insert(
//            [
//                'name' => "Assonance",
//                'description' => "A Journal of Russian & Comparative Literary Studies",
//                'site_url' => "journal_files/ASSONANCE 23-1.pdf",
//                'img_url' => "img.png",
//                'category' => "4",
//                'created_at' => now(),
//            ]
//        );
//        DB::table('journals')->insert(
//            [
//                'name' => "Assonance",
//                'description' => "A Journal of Russian & Comparative Literary Studies",
//                'site_url' => "journal_files/Assonance 22.pdf",
//                'img_url' => "img_1.png",
//                'category' => "4",
//                'created_at' => now(),
//            ]
//        );
//        DB::table('journals')->insert(
//            [
//                'name' => "Assonance",
//                'description' => "A Journal of Russian & Comparative Literary Studies",
//                'site_url' => "journal_files/Assonance-19.pdf",
//                'img_url' => "img_2.png",
//                'category' => "4",
//                'created_at' => now(),
//            ]
//        );
//        DB::table('journals')->insert(
//            [
//                'name' => "Assonance",
//                'description' => "A Journal of Russian & Comparative Literary Studies",
//                'site_url' => "journal_files/Assonance-No.17-January-2017-.pdf",
//                'img_url' => "img_3.png",
//                'category' => "4",
//                'created_at' => now(),
//            ]
//        );
//        DB::table('journals')->insert(
//            [
//                'name' => "Assonance",
//                'description' => "A Journal of Russian & Comparative Literary Studies",
//                'site_url' => "journal_files/Assonance-No.18-2.pdf",
//                'img_url' => "img_4.png",
//                'category' => "4",
//                'created_at' => now(),
//            ]
//        );
//        DB::table('journals')->insert(
//            [
//                'name' => "Assonance",
//                'description' => "A Journal of Russian & Comparative Literary Studies",
//                'site_url' => "journal_files/Имагология.2021.15.pdf",
//                'img_url' => "img_5.png",
//                'category' => "4",
//                'created_at' => now(),
//            ]
//        );
//        DB::table('journals')->insert(
//            [
//                'name' => "Assonance",
//                'description' => "A Journal of Russian & Comparative Literary Studies",
//                'site_url' => "journal_files/Имагология_2023_19.pdf",
//                'img_url' => "img_6.png",
//                'category' => "4",
//                'created_at' => now(),
//            ]
//        );
        DB::table('journals')->insert(
            [
                'name' => "Assonance",
                'description' => "A Journal of Russian & Comparative Literary Studies",
                'site_url' => "journal_files/Имгология -22.pdf",
                'img_url' => "img_7.png",
                'category' => "4",
                'created_at' => now(),
            ]
        );
        DB::table('journals')->insert(
            [
                'name' => "Central Asian Studies ",
                'description' => "Central Asian Journal of Literature, Philosophy and Culture (ISSN: 2660-6828)",
                'site_url' => "https://cajlpc.centralasianstudies.org/",
                'img_url' => "17.jpg",
                'category' => "5",
                'created_at' => now(),
            ]
        );
    }
}
