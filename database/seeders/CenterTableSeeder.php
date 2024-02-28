<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Turkey",
            'name' => "İstanbul Bilgi Üniversitesi, Karşılaştırmalı Edebiyat Bölümü",
            'url' => "https://www.bilgi.edu.tr/tr/akademik/sosyal-ve-beseri-bilimler-fakultesi/karsilastirmali-edebiyat/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Turkey",
            'name' => "Eskişehir Osmangazi Üniversitesi, Fen Edebiyat  Fakültesi Karşılaştırmalı Edebiyat Bölümü",
            'url' => "https://ke.ogu.edu.tr/Sayfa/Index/8/bolumumuz-hakkinda",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Turkey",
            'name' => "Dokuz Eylül Üni versitesi, Karşılaştırmalı Edebiyat Bölümü",
            'url' => "https://web.deu.edu.tr/komparatistik/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Turkey",
            'name' => "Yeditepe Üniversitesi Sosyal Bilimler Enstitüsü, Karşılaştırmalı Edebiyat Yüksek Lisans Programı",
            'url' => "https://sbe.yeditepe.edu.tr/tr/karsilastirmali-edebiyat-yuksek-lisans-programi",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Binghamton University Department of Comparative Literature",
            'url' => "https://www.binghamton.edu/comparative-literature/index.html",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Brown University Department of Comparative Literature",
            'url' => "https://graduateprograms.brown.edu/graduate-program/comparative-literature-phd",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "City University of New York Graduate centers Program in Comparative Literature",
            'url' => "https://www.gc.cuny.edu/comparative-literature?gad=1&gclid=EAIaIQobChMIuMLt1cDAgQMV0NzVCh1apQl8EAAYASAAEgJE3vD_BwE",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Columbia University Department of English and     Comparative Literature",
            'url' => "https://bulletin.columbia.edu/columbia-college/departments-instruction/english-comparative-literature/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Cornell University Department of Comparative Literature",
            'url' => "https://complit.cornell.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Duke University Program in Literature",
            'url' => "https://literature.duke.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Emory University Comparative Literature  Department",
            'url' => "https://comparativelit.emory.edu/people/index.html",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Harvard University Department of Comparative Literature",
            'url' => "https://complit.fas.harvard.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "New York University Department of Comparative    Literature",
            'url' => "https://as.nyu.edu/departments/complit.html",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Ohio State University Department of Comparative  Studies",
            'url' => "https://comparativestudies.osu.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Princeton University Department of Comparative Literature",
            'url' => "https://complit.princeton.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Stanford University Department of Comparative Literature",
            'url' => "https://dlcl.stanford.edu/departments/comparative-literature",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University at Buffalo Department of Comparative Literature",
            'url' => "https://arts-sciences.buffalo.edu/comparative-literature.html",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of California, Berkeley Department of Comparative Literature",
            'url' => "https://complit.berkeley.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of California, Davis Comparative Literature Department	",
            'url' => "https://complit.ucdavis.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of California, Irvine Department of       Comparative Literature",
            'url' => "https://www.humanities.uci.edu/complit",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of California, Los Angeles Department of Comparative Literature",
            'url' => "https://complit.ucla.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of California, Riverside Department of Comparative Literature and Foreign Languages",
            'url' => "https://complitlang.ucr.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of California, San Diego Department of Literature",
            'url' => "https://literature.ucsd.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of California, Santa Cruz Department of Literature",
            'url' => "https://literature.ucsc.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Chicago Department of Comparative Literature",
            'url' => "https://complit.uchicago.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Colorado Graduate Program in Comparative Literature",
            'url' => "https://catalog-archive.colorado.edu/2012-13/node/2294.html",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Georgia Comparative Literature Department",
            'url' => "https://www.cmlt.uga.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Illinois, Urbana-Champaign Program in Comparative and World Literature",
            'url' => "https://complit.illinois.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Michigan Department of Comparative Literature",
            'url' => "https://lsa.umich.edu/complit",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Minnesota Department of Cultural Studies and Comparative Literature",
            'url' => "https://cla.umn.edu/cscl",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Oregon Department of Comparative Literature",
            'url' => "https://complit.uoregon.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Southern California Department of Comparative Literature",
            'url' => "https://dornsife.usc.edu/colt/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Texas at Austin Program in Comparative Literature",
            'url' => "https://liberalarts.utexas.edu/complit/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Washington Department of Comparative Literature",
            'url' => "https://admit.washington.edu/academics/majors/comparative-literature/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Wisconsin, Madison Department of Comparative Literature and Folklore",
            'url' => "https://guide.wisc.edu/graduate/comparative-literature-folklore-studies/#degreesmajorsdoctoralminorsgraduateprofessionalcertificatestext",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Washington University in St. Louis Committee on Comparative Literature",
            'url' => "https://complit.wustl.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Yale University Department of Comparative Literature",
            'url' => "https://complit.yale.edu/people/faculty",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University of Alberta Program in Comparative Literature",
            'url' => "https://www.ualberta.ca/modern-languages-and-cultural-studies/undergraduate-program-information/prospective-undergraduate-students/comparative-literature-courses.html",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Indiana University Comparative Literature      Department",
            'url' => "https://comparativeliterature.indiana.edu/index.html",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "American Comperative literature association (ACLA)",
            'url' => "https://www.wellesley.edu/complit ",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Comparative World literature (California State University)",
            'url' => "https://cla.csulb.edu/departments/complit/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Comparative literature program (Welsey University) ",
            'url' => "https://www.wellesley.edu/complit",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "Comparative literature program (Midlebury college)",
            'url' => "https://www.middlebury.edu/college/academics/comparative-literature",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "International comparative literature association",
            'url' => "https://www.ailc-icla.org/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United States",
            'name' => "University Libraries University of Washington: Comparative Literature: Professional Organizations  ",
            'url' => "https://guides.lib.uw.edu/c.php?g=341425&p=2304025",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Canada",
            'name' => "L'Université de Montréal Department de la littérature compare",
            'url' => "https://complit.umontreal.ca/home/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Canada",
            'name' => "Université de Sherbrooke Littérature canadienne compare",
            'url' => "https://www.studyincanada.com/Programs/40136/Litt%C3%A9rature-canadienne-compar%C3%A9e",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Canada",
            'name' => "University of Toronto Centre for Comparative Literature",
            'url' => "https://complit.utoronto.ca/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Canada",
            'name' => "Canadian Comparative Literature Association ",
            'url' => "https://complit.ca/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United Kingdom",
            'name' => "Queen Mary, University of London Department of Comparative Literature and Culture",
            'url' => "https://www.qmul.ac.uk/study/comparative-literature/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United Kingdom",
            'name' => "University College of London Graduate programme in Comparative Literature",
            'url' => "https://www.mastersportal.com/studies/287588/comparative-literature.html",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "United Kingdom",
            'name' => "British Comparative Literature association ",
            'url' => "https://bcla.org/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Colombia",
            'name' => "Institute for Comparative Literature and Society ",
            'url' => "https://icls.columbia.edu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "France",
            'name' => "Association internationale de littérature comparée (AILC)",
            'url' => "https://www.avldigital.de/de/vernetzen/details/institution/association-internationale-de-litterature-comparee",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "France",
            'name' => "EUROPEAN SOCIETY OF COMPARATIVE LITERATURE/SOCIÉTÉ EUROPÉENNE DE LITTÉRATURE COMPARÉE",
            'url' => "https://escl-selc.eu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Georgia",
            'name' => "Georgian Comparative Literature Association (GCLA)",
            'url' => "http://geclaorg.ge/indexge.htm",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "Azerbaijan",
            'name' => "Azerbaijan Comparative Literature Association",
            'url' => "http://www.azcla.org/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "China",
            'name' => "Comparative literature association of Republic of China",
            'url' => "http://claroc.tw/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "China",
            'name' => "American Association of Chinese Comparative Literature",
            'url' => "https://depts.washington.edu/acclhome/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Argentina",
            'name' => "Associancion Argentina de Literatura Comparada ",
            'url' => "https://aaliteraturacomparada.wordpress.com/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Australia",
            'name' => "Australian and South Pacific Association for Comparative Literary Studies (ASPACLS)",
            'url' => "https://uia.org/s/or/en/1100018662",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "Korea",
            'name' => "The Korean Comparative Literature Association",
            'url' => "http://www.kcla.org/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "Korea",
            'name' => "KEASTWEST: Korea East-West Comparative Literature Association",
            'url' => "https://www.keastwest.or.kr/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "India",
            'name' => "The Comparative Literature Association in India",
            'url' => "https://www.clai.in/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "Bolgaria",
            'name' => "Bulgarian Association of Comparative Literature (ACCL/CALIC)",
            'url' => "https://calic.balkansbg.eu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "Egypt",
            'name' => "Egyptian Society of Comparative Literature",
            'url' => "http://www.egyptian-scl.org/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Germany",
            'name' => "Deutsche Gesellschaft für Allgemeine und VergleichendeLiteraturwissenschaft (DGAVL)",
            'url' => "http://dgavl.de/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Greece",
            'name' => "Greek Comparative LiteratureAssociation",
            'url' => "http://gcla.phil.uoa.gr/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Italy",
            'name' => "Associazione di Teoria e Storia ComparatadellaLetteratura",
            'url' => "http://www.compalit.it/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Luxembourg",
            'name' => "Société luxembourgeoise de littératuregénérale et comparée (SLLGC)",
            'url' => "https://sllgc.lu/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Shvetsiya",
            'name' => "Swiss Association (ASLGC)",
            'url' => "http://www.sagw.ch/sgavl/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Spain",
            'name' => "Sociedad Española de Literatura General y Comparada (SELGyC)",
            'url' => "http://www.selgyc.com/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "Romania",
            'name' => "Asociaţia de LiteraturăGeneralăşiComparată din România",
            'url' => "http://old.unitbv.ro/algcr/DespreALGCR.aspx",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "Morocco",
            'name' => "Moroccan Comparative Literature Association (MCLA)",
            'url' => "https://comparativeliterratureassociationeng.blogspot.com/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "2", #1 sharq 2 g'arb
            'country' => "Czech and Slovakia",
            'name' => "Czech and Slovak Association of Comparative Literature",
            'url' => "http://komparatistika.sk/",
            'created_at' => now(),
        ]);
        DB::table('centers')->insert([
            'type' => "1", #1 sharq 2 g'arb
            'country' => "Slovenia",
            'name' => "Slovenskodruštvo za primerjalnoknjiževnost (SDPK)",
            'url' => "http://www.zrc-sazu.si/sdpk/sdpk.htm",
            'created_at' => now(),
        ]);
    }
}
