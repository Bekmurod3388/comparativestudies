<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use App\Models\Abstracts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbstractTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abstracts = [
            [
                'applicant_name' => 'Axmedov Oybek Saporboyevich',
                'dissertation_topic' => '“Ingliz va o`zbek tillarida soliq-bojxona terminlarining lingvistik tahlili va tarjima muammolari"',
                'locale_id' => 1,
                'academic_degree' => 'DSc',
                'specialty_code_and_name' => '10.00.06 – Qiyosiy-adabiyotshunoslik, chog`ishtirma tilshunoslik, tarjimashunoslik',
                'protection_year' => 2011,
                'file_url' => 'https://tsuos.uz/wp-content/uploads/2018/08/ahmedov.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the 'abstracts' table
        DB::table('abstracts')->insert($abstracts);
    }
}


//        $data = [
//            ['Axmedov Oybek Saporboyevich', '"Ingliz va o\'zbek tillarida soliq-bojxona terminlarining lingvistik tahlili va tarjima muammolari"', 'DSc', "10.00.06 – Qiyosiy-adabiyotshunoslik, chog'ishtirma tilshunoslik, tarjimashunoslik", '2011 yil', "https://tsuos.uz/wp-content/uploads/2018/08/ahmedov.pdf"],
//            ['Djumabayeva Jamila Sharipovna', "“O'zbek va ingliz tillarida leksik hamda stilistik graduonimiya”", 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2016 yil', "https://tsuos.uz/wp-content/uploads/2017/01/avtoref_jumabayeva.pdf"],
//            ['Djumanova Dilbar Rahimovna', '"Til aloqasi sharoitida so\'zning fonologik modeli"', 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2016 yil', "https://tsuos.uz/wp-content/uploads/2017/01/avtoref_jumanova.pdf"],
//            ['Kamilova Saodat Ergashevna', '“XX asr oxiri – 21-asr boshlari rus va oʻzbek adabiyotida qissa janri poetikasining rivojlanishi”', 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2016 yil', "https://tsuos.uz/wp-content/uploads/2017/01/avtoref_kamilovas.pdf"],
//            ['Nasirov Abdurahim Abdimutalipovich', "“Fransuz, o'zbek va rus tillaridagi proverbial frazeologizmlarning semantik-stilistik va milliy-madaniy xususiyatlari”", 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2016 yil', "https://tsuos.uz/wp-content/uploads/2017/01/avtoref_nosirov.pdf"],
//            ['Paluanova Halifa Dariboevna', "“Ingliz, o'zbek, rus va qoraqalpoq tillarida ekologik terminlaring derivasiong'semantik prinsiplari”", 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2016 yil', "https://tsuos.uz/wp-content/uploads/2017/01/avtoref_paluanova.pdf"],
//            ['Xalliyeva Gulnoz Iskandarovna', "“XX asr rus sharqshunosligida o'zbek mumtoz adabiyoti tadqiqi”", 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2016 yil', "https://tsuos.uz/wp-content/uploads/2017/01/avtoref_hallieva.pdf"],
//            ['Baxronova Dilrabo Keldiyorovna', "“Antropozoomorfizmlarning semantik va lingvokulturologik xususiyatlari (o'zbek va ispan tillari materialida)", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2018/08/baxronova.pdf"],
//            ["Jo'rayeva Malohat Muhamadovna", "“Fransuz va o'zbek ertaklarida modallik kategoriyasining lingvokognitiv, milliy-madaniy xususiyatlari”", 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2018/02/jurayevam.pdf"],
//            ['Qodirbekova Durdona Xikmatullaevna', "“Inglizcha-o'zbekcha axborot-kommunikatsiya texnologiyalari terminologiyasi va uning leksikografik xususiyatlari”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2017/08/%D0%9A%D0%B0%D0%B4%D0%B8%D1%80%D0%B1%D0%B5%D0%BA%D0%BE%D0%B2%D0%B0-PhD-%D0%B0%D0%B2%D1%82%D0%BE%D1%80%D0%B5%D1%84%D0%B5%D1%80%D0%B0%D1%82.pdf"],
//            ['Kdirbayeva Gulzira Qurbonboevna', '“Man” – “adam” konseptosferasi birliklarining lingvomadaniy va lingvokognitiv xususiyatlari (ingliz va qoraqalpoq tillari misolida)”', 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2018/02/kdirbayeva.pdf"],
//            ['Samigova Xushnuda Botirovna', "“Ingliz va o'zbek nutq madaniyatining ritoric aspektining qiyosiy tadqiqi”", 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2017/10/samigova_h.pdf"],
//            ['Sharipova Aziza Abdumanapovna', "“Stilistik sinonimlar tarjimasining lingvokul-turologik xususiyatlari (ingliz va o'zbek tillari materiallari asosida)”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2018/02/sharipova_a.pdf"],
//            ['Shirinova Raima Xakimovna', '“Olam milliy manzarasining badiiy tarjimada qayta yaratilishi”', 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2017/09/shirinova_r.pdf"],
//            ['Teshaboyeva Ziyodaxon Qodirovna', '“Boburnoma”ning inglizcha tarjimalaridagi frazeologik birliklar va tahrir milliy-madaniy xususiyatlari”', 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2018/02/teshaboyeva.pdf"],
//            ['Tuxtaxodjayeva Nargiza Akmalovna', "“Badiiy tarjimada lingvo-kulturemalarning ifodalanishi (ingliz va o'zbek tillari misolida)”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2017/10/tuhtahodjayeva_n.pdf"],
//            ['Xolmurodova Leyla Eshquvatovna', '“Ingliz va fransuz tillaridagi obrazli va motivlashgan frazeologizmlarning tematik-ideografik talqini (lingvomadaniy aspekt)”', 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2018/02/holmuradova.pdf"],
//            ["Xudjayeva Ra'no Mutalibjonovna", "“Ingliz va o'zbek tillaridagi genetik bog'lanmagan leksik omonimlarning miqdori va leksikografik talqini”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2017/10/hudjayeva_r.pdf"],
//            ["Yo'ldoshev Ulug'bek Ravshanbekovich", "“Xajviy matnlar tarjimasining lingvostilistik va lingvokulturorlogik xususiyatlari” (ingliz tiliga tarjima qilingan o'zbek xalq latifalari misolida)", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2018/02/yuldoshev.pdf"],
//            ['Yuldashev Akmal Gulamjanovich', "“Idiomatik qo'shma so'zlarning lingvokognitiv aspekti” (ingliz va o'zbek tillari misolida)", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2017 yil', "https://tsuos.uz/wp-content/uploads/2018/02/yuldashev_a.pdf"],
//            ['Djafarova Dildora Ilxomovna', "“Fransuz va o'zbek tillarida leksik motivlashuvning milliy-madaniy xususiyatlari”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ["Qosimova Ra'no Raxmatulloyevna", "“O'zbek to'y va motam marosim folklor matnlarining inglizcha tarjimasida etnografizmlarning namunalari”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ["Mo'minova Aziza Arslanovna", "“Fransuz, o'zbek va rus tillarida undashni ifodalovchi til birliklarining lingvomadaniy xususiyatlari”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ['Qosimova Nafisa Farhodovna', "“Lisoniy belgi asimmetriyasi va uning so'roq gap tarjimasida voqelanishi”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ['Sapayeva Feruza Davlatovna', "“Maxtumquli she'rlari o'zbekcha tarjima qiyosiy tahlili”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ['Sayfullaev Anvar Islomovich', '“Preposition va kwmakchilarining nominative-sintagmativ mavkei va tipologik strukturaviy makomi”', 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ['Toirova Nargiza Isakovna', '“Badiiy adabiyotda koʻzgu va surat ramzlarining gʻoyaviy-estetik asarlari (Omon Muxtor va Oskar Uayld asarlari asosida)”', 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ['Xajiyeva Feruza Melsovna', '“Biografik roman janri xususiyatlari (I.Stoun, M.Qoriev va N.Normatov asarlari qiyosida)”', 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ["Xodjayeva Dilafro'z Izatilloyevna", "“Tilshunoslik terminlarining leksikografik tahlili (ingliz, rus va o'zbek tillari izohli lug'atlari materiallari misolida)”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ['Xoliqov Bahodir Aliqulovich', '“Detektiv romanlarda voqelikning badiiy talqinini tizimli modellashtirish (Mario Pyuzoning “The Godfather” va Tohir Malikning “Shaytanat”)', 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ['Xoshimova Dildora Madaminovna', '“Boburnoma” matnidagi tasviriy tadqiqotning ingliz tiliga tarjimalari tadqiqi”', 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ["Xoshimxo'jayeva Mohirux Muzaffarovna", "“Olamning lisoniy tasvirida fitonimlar (ingliz, rus va o'zbek tillari misolida”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2018'],
//            ['Asqarova Shaxnoza Kamolidinovna', "Ingliz va o'zbek tillarida takrorning lingvistik xususiyatlari", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma", 'tilshunoslik va tarjimashunoslik', "2019"],
//            ['Xodjayeva Nilufar Bekmuratovna', "Premchand asarlari o'zbekcha tarjimalarining leksik-stilistik xususiyatlari", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2019', "https://tsuos.uz/wp-content/uploads/2018/02/%D0%90%D1%81%D2%9B%D0%B0%D1%80%D0%BE%D0%B2%D0%B0-%D0%A8%D0%B0%D1%85%D0%BD%D0%BE%D0%B7%D0%B0-%D0%9A%D0%B0%D0%BC%D0%BE%D0%BB%D0%B8%D0%B4%D0%B8%D0%BD%D0%BE%D0%B2%D0%BD%D0%B0.pdf"],
//            ['Raxmatjonova Kamola Abdumutal kizi', "Hindiy va o'zbek tillarida son va kelishik grammatik katyegoriyalarining chog'ishtirma-tipologik tadqiqi", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2020', "https://tsuos.uz/wp-content/uploads/2018/02/%D0%A5%D0%BE%D0%B4%D0%B6%D0%B0%D0%B5%D0%B2%D0%B0-%D0%9D%D0%B8%D0%BB%D1%83%D1%84%D0%B0%D1%80-%D0%91%D0%B5%D0%BA%D0%BC%D1%83%D1%80%D0%B0%D1%82%D0%BE%D0%B2%D0%BD%D0%B0.pdf"],
//            ['Shamsiyeva Shohista Qudratullayevna', "Xitoy va o'zbek tillaridagi maishiy evfemizmlarning lingvomadaniy tadqiqi", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2020', "https://tsuos.uz/wp-content/uploads/2018/02/%D0%A0%D0%B0%D1%85%D0%BC%D0%B0%D1%82%D0%B6%D0%BE%D0%BD%D0%BE%D0%B2%D0%B0-%D0%9A%D0%B0%D0%BC%D0%BE%D0%BB%D0%B0-%D0%90%D0%B1%D0%B4%D1%83%D0%BC%D1%83%D1%82%D0%B0%D0%BB-%D0%BA%D0%B8%D0%B7%D0%B8.pdf"],
//            ['Turapova Nargiza Axmedovna', "Yapon va o'zbek tillari somatik frazeologizmlarining chog'ishtirma tahlili (lingvomadaniy aspyekt)", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2020', "https://tsuos.uz/wp-content/uploads/2018/02/%D0%A8%D0%B0%D0%BC%D1%81%D0%B8%D0%B5%D0%B2%D0%B0-%D0%A8%D0%BE%D2%B3%D0%B8%D1%81%D1%82%D0%B0-%D2%9A%D1%83%D0%B4%D1%80%D0%B0%D1%82%D1%83%D0%BB%D0%BB%D0%B0%D0%B5%D0%B2%D0%BD%D0%B0.pdf"],
//            ['Zikrullayeva Xusniya Baxtiyorovna', "Ingliz, turk va o'zbyek ilmiy-tyexnikaviy tarjimada lyeksik-syemantik transformasiyalar", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2020', "https://tsuos.uz/wp-content/uploads/2018/02/%D0%A2%D1%83%D1%80%D0%B0%D0%BF%D0%BE%D0%B2%D0%B0-%D0%9D%D0%B0%D1%80%D0%B3%D0%B8%D0%B7%D0%B0-%D0%90%D1%85%D0%BC%D0%B5%D0%B4%D0%BE%D0%B2%D0%BD%D0%B0.pdf"],
//            ['Ismatullayeva Nargiza Rasuljanovna', "Xitoy va o'zbek tillarida lakunalarning voqelanishi", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2021 yil', "https://tsuos.uz/wp-content/uploads/2018/02/%D0%97%D0%B8%D0%BA%D1%80%D1%83%D0%BB%D0%BB%D0%B0%D0%B5%D0%B2%D0%B0-%D0%A5%D1%83%D1%81%D0%BD%D0%B8%D1%8F-%D0%91%D0%B0%D1%85%D1%82%D0%B8%D1%91%D1%80%D0%BE%D0%B2%D0%BD%D0%B0.pdf"],
//            ['Saidakbarova Saodat Parxadjanovna', "Ingliz va o'zbek tillarida gastronomik frazyeologizmlarning lingvomadaniy xususiyatlari", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2021 yil', "https://tsuos.uz/wp-content/uploads/2018/02/%D0%98%D1%81%D0%BC%D0%B0%D1%82%D1%83%D0%BB%D0%BB%D0%B0%D0%B5%D0%B2%D0%B0-%D0%9D%D0%B0%D1%80%D0%B3%D0%B8%D0%B7%D0%B0-%D0%A0%D0%B0%D1%81%D1%83%D0%BB%D0%B6%D0%B0%D0%BD%D0%BE%D0%B2%D0%BD%D0%B0.pdf"],
//            ['Sharaxmetova Muxlisa Ansaritdinovna', '“Bobur urducha tarjimasida muallif uslubiga xos leksik-semantik ishlab chiqarishning ask etishi”', 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2021 yil',  "https://tsuos.uz/wp-content/uploads/2018/02/%D0%A1%D0%B0%D0%B8%D0%B4%D0%B0%D0%BA%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D0%B0-%D0%A1%D0%B0%D0%BE%D0%B4%D0%B0%D1%82-%D0%9F%D0%B0%D1%80%D1%85%D0%B0%D0%B4%D0%B6%D0%B0%D0%BD%D0%BE%D0%B2%D0%BD%D0%B0.pdf"],
//            ['Xomidov Xayrullo Xudoyorovich', "O'zbek qissa valarining roman turkcha tarjimalarida milliylik, badiiylik va lisoniy adekvatik masalalari", 'DSc', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2021 yil', "https://tsuos.uz/wp-content/uploads/2018/02/%D0%A5%D0%BE%D0%BC%D0%B8%D0%B4%D0%BE%D0%B2-%D0%A5%D0%B0%D0%B9%D1%80%D1%83%D0%BB%D0%BB%D0%BE-%D0%A5%D1%83%D0%B4%D0%BE%D1%91%D1%80%D0%BE%D0%B2%D0%B8%D1%87.pdf"],
//            ['Abdullayeva Dilafruz Suratillayevna', "Zamonaviy arab va o'zbek hiqoyalarida badiiy psixologizm (G'ada As-samman va Zulfiya Qurolboy qizi hikoyalari misolida)", 'PhD', "10.00.06-Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2022', "https://tsuos.uz/wp-content/uploads/2022/12/AVTOREFARAT.pdf"],
//            ['Ashirbayeva Diloram Ravshanovna', "“Koreys va o'zbek diskursida murojaat birlik qiyosiy tadqiqi”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik ixtisosligi.", '2022', "https://tsuos.uz/wp-content/uploads/2018/02/5.-%D0%91%D0%B0%D1%85%D0%B0%D0%B4%D0%B8%D1%80%D0%BE%D0%B2-%D0%96%D0%B0%D1%85%D0%B0%D0%BD%D0%B3%D0%B8%D1%80%D0%BC%D0%B8%D1%80%D0%B7%D0%BE-%D0%90%D0%B1%D0%B4%D1%83%D0%BC%D0%B0%D0%B6%D0%B8%D1%82%D0%BE%D0%B2%D0%B8%D1%87.pdf"],
//            ['Baxadirov Jaxangirmirzo Abdumajitovich', "O'zbek va ingliz tillaridagi ijtimoiy reklamalarning lingvomadaniy tadqiqi", 'PhD', "10.00.06-Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2022', "https://tsuos.uz/wp-content/uploads/2022/05/O%CA%BBzbek-va-ispan-tillarida-olam-manzarasining-lingvokognitiv-kategoriyalanishi.pdf"],
//            ['Dilrabo Keldiyorovna Baxronova', 'Oʻzbek va ispan tillarida olam manzarasining lingvokognitiv kategoriyalanishi', 'DSc', "10.00.06-Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2022', "https://tsuos.uz/wp-content/uploads/2018/02/FORS-VA-OZBEK-TILLARIDA-TERMIN-YASASH-PRINSPLARI-VA-MUAMMOLARI.pdf"],
//            ['Mirzaxmedova Xulkar Vasilovna', "Fors Va O'zbek Tillarida Termin Yasash Prinsplari Va muammolari", 'DSc', '10.00.06 –Qiyosiy adabiyotshunoslik, chogʻishtirma tilshunoslik va tarjimashunoslik', '2022', "https://tsuos.uz/wp-content/uploads/2022/12/AVTOREFARAT-1.pdf"],
//            ['Sadriddinzoda Safiya Shaxobiddinovna', "“Demonologik leksikaning semantik xususiyatlari va pragma-madaniy vositalarii (ingliz, o'zbek va rus adabiyoti asosida)”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik ixtisosligi.", '2022', "https://tsuos.uz/wp-content/uploads/2018/02/15.-%D0%A8%D0%B0%D0%BC%D1%81%D0%B8%D0%B5%D0%B2%D0%B0-%D0%91%D0%B0%D1%80%D0%BD%D0%BE%D1%85%D0%BE%D0%BD-%D0%91%D0%B0%D1%85%D1%80%D0%BE%D0%BC%D1%85%D0%BE%D0%B4%D0%B6%D0%B0%D0%B5%D0%B2%D0%BD%D0%B0.pdf"],
//            ['Shamsiyev Barnoxon Baxromxodjayevna', 'Tarjima matni madaniyat transferi sifatida (Nasume Sosekining “Qalb” asari asosida)', 'PhD', "10.00.06-Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2022', "https://tsuos.uz/wp-content/uploads/2018/02/15.-%D0%A8%D0%B0%D0%BC%D1%81%D0%B8%D0%B5%D0%B2%D0%B0-%D0%91%D0%B0%D1%80%D0%BD%D0%BE%D1%85%D0%BE%D0%BD-%D0%91%D0%B0%D1%85%D1%80%D0%BE%D0%BC%D1%85%D0%BE%D0%B4%D0%B6%D0%B0%D0%B5%D0%B2%D0%BD%D0%B0.pdf"],
//            ['Umarova Mohira Azim qizi', "“XX asr o'zbek nasri namunalarining urdu tilidagi tarjimalarida milliy koloritning ifodalanishi”", 'PhD', "10.00.06 – Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik ixtisosligi bo'yicha.", '2022', "https://tsuos.uz/wp-content/uploads/2022/11/Avtoreferat-1.pdf"],
//            ['Yeon Sangheumning', 'Oʻzbek tilida modal maʼnoli koʻmakchi feʼllar va fayl koreys tilida ifodalanishi', 'PhD', "10.00.06-Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2022', "https://tsuos.uz/wp-content/uploads/2018/02/O%CA%BBzbek-tilida-modal-ma%E2%80%99noli-ko%CA%BBmakchi-fe%E2%80%99llar-va-ularning-koreys-tilida-ifodalanishi.pdf"],
//            ['Jo Min Yong', "O'zbek va koreys tillarida o'xshatishlarning lingvomadaniy tadqiqi", 'PhD', "10.00.06-Qiyosiy adabiyotshunoslik, chog'ishtirma tilshunoslik va tarjimashunoslik", '2023 yil', "https://drive.google.com/file/d/1rAzlmYKYpYw-pLox9EYH_KgjmJCDB7z8/view",],
//        ];
//        foreach ($data as $abstract) {
//            DB::table('abstracts')->insert([
//                'applicant_name' => $abstract[0],
//                'dissertation_topic' => $abstract[1],
//                'academic_degree' => $abstract[2],
//                'specialty_code_and_name' => $abstract[3],
//                'protection_year' => $abstract[4],
//            ]);
//        }
