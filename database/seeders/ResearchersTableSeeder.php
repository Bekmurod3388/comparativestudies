<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResearchersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('researchers')->insert([
            'fullname' => "Xalliyeva Gulnoz Iskandarovna",
            'position' => "Filologiya fanlari doktori (DSc), Professor ",
            'research' => "Jahon adabiyoti, Qiyosiy adabiyotshunoslik, G’arb va sharq adabiyotida sayyor syujetlar, Rossiya sharqshunosligi.",
            'scholar' => "https://scholar.google.com/citations?user=XthCZmsAAAAJ&hl=ru&oi=ao",
            'email' => "gulnoz7410@mail.ru",
            'img' => "researchers/img.png",
            'created_at' => now(),
        ]);
        DB::table('researchers')->insert([
            'fullname' => "To‘rayeva Bahor Bahriddinovna",
            'position' => "Filologiya fanlari doktori (DSc), dotsent",
            'research' => " romanlar poetikasi, xronotop nazariyasi, arxetip, mega, makro va mikroxronotop, komparativistika.",
            'scholar' => "https://scholar.google.com/citations?hl=ru&user=TuC_b4QAAAAJ&view_op=list_works&gmla=ABEO0YpR7B9HLqguiGm3z0IQ5Sbz0d31IlltnVzRsSgtUBiLssbgZkvpq3RcjjsgQnvjo06zlKkfoLseUykJP_ZPzIM1aiY2ttff4l22HEPSNw",
            'email' => "turayeva.bahor@gmail.com",
            'img' => "researchers/img_1.png",
            'created_at' => now(),
        ]);
        DB::table('researchers')->insert([
            'fullname' => "Sabirova Zebo Zokirovna",
            'position' => "Filologiya fanlari bo’yicha falsafa doktori (PhD), katta o’qituvch",
            'research' => " O’zbek adabiyoti, zamonaviy jahon va o‘zbek she’riyati, qiyosiy adabiyotshunoslik, adabiyot nazariyasi.",
            'scholar' => "https://scholar.google.com/citations?user=24yQLEcAAAAJ&hl=ru",
            'email' => "zebonur2017@gmail.com",
            'img' => "researchers/img_2.png",
            'created_at' => now(),
        ]);
        DB::table('researchers')->insert([
            'fullname' => "Mannonova Feruzabonu Sherali qizi",
            'position' => "katta o’qituvchi",
            'research' => "Qiyosiy adabiyotshunoslik, tilshunoslik, metodika.",
            'scholar' => "https://scholar.google.com/citations?hl=ru&view_op=list_works&gmla=AJ1KiT0Q-vYppEdUJVsWjownHcAY-jB7h2u2Dd6EvYQ5n6h-G-8lxeJCRZtqdZ04iDaHx13rCQScV-g3kldF3054ombdeaLVBSIOXXr9n7IX3xairg80xRfR&user=QkBbEqoAAAAJ",
            'email' => "feruzamannonova@gmail.com",
            'img' => "researchers/img_3.png",
            'created_at' => now(),
        ]);
        DB::table('researchers')->insert([
            'fullname' => "Yusupova Adolat Anvarovna",
            'position' => "O’qituvchi",
            'research' => "Jahon adabiyoti, rumiyshunoslik, tasavvuf adabiyoti, ingliz va o’zbek didaktik she’riyati.",
            'img' => "researchers/img_4.png",
            'created_at' => now(),
        ]);
        DB::table('researchers')->insert([
            'fullname' => "Xo’shboqova Gulshoda Kamoliddin qizi",
            'position' => "Talaba",
            'research' => "O’zbek adabiyoti, qiyosiy adabiyotshunoslik, chet tilini o’qitish metodikasi, ingliz romanlari",
            'img' => "researchers/img_8.png",
            'created_at' => now(),
        ]);
    }
}
