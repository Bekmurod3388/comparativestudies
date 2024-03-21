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
//            [
//                'name' => 'The Concept of Influence in Comparative literature',
//                'journal_name' => 'Penn State University Press',
//                'locale_id' => 2,
//                'authors' => 'A. Owen Aldridge, Anna Balakian, Claudio Guillén and Wolfgang Bernard Fleischmann',
//                'file_url' => 'article_files/files/1. Brub-CulturalStudiesComparative-2005.pdf',
//                'photo_url' => "article_files/photos/img_2.png",
//                'published_date' => '2023-11-24 00:00:00',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
            [
                'name' => 'Cultural Studies and Comparative Literature?',
                'journal_name' => 'Penn State University Press',
                'locale_id' => 2,
                'authors' => 'Michael Bérubé',
                'file_url' => 'article_files/files/1. Brub-CulturalStudiesComparative-2005.pdf',
                'photo_url' => "article_files/photos/img_5.png",
                'published_date' => '2023-11-24 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Productive Comparative Angst: Comparative Literature in the Age of Multiculturalism',
                'journal_name' => 'Board of Regents of the University of Oklahoma',
                'locale_id' => 2,
                'authors' => 'Linda Hutcheon',
                'file_url' => 'article_files/files/2. Hutcheon-ProductiveComparativeAngst-1995.pdf',
                'photo_url' => "article_files/photos/img.png",
                'published_date' => '24-11-23 11:52:16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Destiny of Comparative Literature, Globalization or Not',
                'journal_name' => 'Indiana University Press',
                'locale_id' => 2,
                'authors' => 'Jan M. Ziolkowski',
                'file_url' => 'article_files/files/3. Ziolkowski-IncomparableDestinyComparative-2007.pdf',
                'photo_url' => "article_files/photos/img_1.png",
                'published_date' => '24-11-23 11:51:15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Relations between Music and Literature as a Field of Study',
                'journal_name' => 'Duke University Press on behalf of the University of Oregon',
                'locale_id' => 2,
                'authors' => 'Calvin S. Brown',
                'file_url' => 'article_files/files/4. Brown-RelationsMusicLiterature-1970.pdf',
                'photo_url' => "article_files/photos/img_2.png",
                'published_date' => '24-11-23 11:48:08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Concept of Influence in Comparative Literature: A Symposium',
                'journal_name' => 'Penn State University Press',
                'locale_id' => 2,
                'authors' => 'A. Owen Aldridge, Anna Balakian, Claudio Guillén and Wolfgang Bernard Fleischmann',
                'file_url' => 'article_files/files/5. Aldridge-ConceptInfluenceComparative-1963.pdf',
                'photo_url' => "article_files/photos/img_3.png",
                'published_date' => '24-11-23 11:45:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Postcolonial Comparative',
                'journal_name' => 'Modern Language Association',
                'locale_id' => 2,
                'authors' => 'ROBERT J. C. YOUNG',
                'file_url' => 'article_files/files/6. YOUNG-PostcolonialComparative-2013.pdf',
                'photo_url' => "article_files/photos/img_4.png",
                'published_date' => '24-11-23 11:41:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => ' Comparative Literature and Translation',
                'journal_name' => 'Duke University Press on behalf of the University of Oregon',
                'locale_id' => 2,
                'authors' => 'André Lefevere',
                'file_url' => 'article_files/files/8. Lefevere-IntroductionComparativeLiterature-1995.pdf',
                'photo_url' => "article_files/photos/img_7.png",
                'published_date' => '24-11-23 11:36:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature versus World Literature',
                'journal_name' => 'University of North Carolina Press',
                'locale_id' => 2,
                'authors' => 'DOROTHY M. FIGUEIRA',
                'file_url' => 'article_files/files/9. FIGUEIRA-ComparativeLiteratureversus-2010.pdf',
                'photo_url' => "article_files/photos/img_8.png",
                'published_date' => '24-11-23 11:31:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature ',
                'journal_name' => 'Rocky Mountain Modern Language Association',
                'locale_id' => 2,
                'authors' => 'Kiritilmagan',
                'file_url' => 'article_files/files/10. ComparativeLiterature-1954.pdf',
                'photo_url' => "article_files/photos/img_9.png",
                'published_date' => '24-11-23 11:27:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature in Question',
                'journal_name' => 'The MIT Press on behalf of American Academy of Arts & Sciences',
                'locale_id' => 2,
                'authors' => 'Pauline Yu',
                'file_url' => 'article_files/files/11. Yu-ComparativeLiteratureQuestion-2006.pdf',
                'photo_url' => "article_files/photos/img_10.png",
                'published_date' => '24-11-23 11:19:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature',
                'journal_name' => 'Modern Language Association',
                'locale_id' => 2,
                'authors' => 'Haun Saussy',
                'file_url' => 'article_files/files/12. Saussy-ComparativeLiterature-2003.pdf',
                'photo_url' => "article_files/photos/img_11.png",
                'published_date' => '24-11-23 11:16:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature',
                'journal_name' => 'Modern Language Association',
                'locale_id' => 2,
                'authors' => 'David Damrosch',
                'file_url' => 'article_files/files/13. Damrosch-ComparativeLiterature-2003.pdf',
                'photo_url' => "article_files/photos/img_12.png",
                'published_date' => '24-11-23 11:11:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature Today',
                'journal_name' => 'Duke University Press on behalf of the University of Oregon',
                'locale_id' => 2,
                'authors' => 'René Wellek',
                'file_url' => 'article_files/files/14. Wellek-ComparativeLiteratureToday-1965.pdf',
                'photo_url' => "article_files/photos/img_13.png",
                'published_date' => '24-11-23 11:11:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Theory, Cultural Studies And Cross-Disciplinary',
                'locale_id' => 2,
                'authors' => 'jiazhao lin & Jonathan Arac',
                'file_url' => 'article_files/files/15. Theory_Cultural_Studies_And_Cross_Disciplinary_Research_A_Dialogue.pdf',
                'photo_url' => "article_files/photos/img_14.png",
                'published_date' => '31-01-21 11:11:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Australia between White Australia and Multiculturalism: a World Literature Perspective',
                'locale_id' => 2,
                'authors' => 'Thomas O. Beebee',
                'file_url' => 'article_files/files/16. Australia_between_White_Australia_and_Multiculturalism_a_World_Literature.pdf',
                'photo_url' => "article_files/photos/img_15.png",
                'published_date' => '21-10-23 11:11:49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'World Literary Histories as Rewritings of World Historiography',
                'locale_id' => 2,
                'authors' => 'Svend Erik Larsen',
                'file_url' => 'article_files/files/17. World_Literary_Histories_as_Rewritings_of_World_Historiography.pdf',
                'photo_url' => "article_files/photos/img_16.png",
                'published_date' => '28-06-17 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'The Variation Theory of Comparative Literature
and the Cross-Civilization Studies',
                'locale_id' => 2,
                'authors' => 'Shunqing Cao & Song Shi',
                'file_url' => 'article_files/files/18. The_Variation_Theory_of_Comparative_Literature_and_the_Cross_Civilization.pdf',
                'photo_url' => "article_files/photos/img_17.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'The Development of Plural Cultures and the
Future of Comparative Literature',
                'locale_id' => 2,
                'authors' => 'Daiyun Yue',
                'file_url' => 'article_files/files/19. The_Development_of_Plural_Cultures_and_the_Future_of_Comparative.pdf',
                'photo_url' => "article_files/photos/img_18.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'The Uses of the Useless: Comparative Literature
and the Multinational Corporation',
                'locale_id' => 2,
                'authors' => 'Eugene Chen Eoyang',
                'file_url' => 'article_files/files/20. The_Uses_of_the_Useless_Comparative_Literature_and_the_Multinational.pdf',
                'photo_url' => "article_files/photos/img_19.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Variation Theory: A Breakthrough in Research of
World Comparative Literature Theory',
                'locale_id' => 2,
                'authors' => 'Shunqing CAO',
                'file_url' => 'article_files/files/21 Variation_Theory_A_Breakthrough_in_Research_of_World_Comparative.pdf',
                'photo_url' => "article_files/photos/img_20.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'The Crisis of Comparative Literature and the Rise
of World Literature',
                'locale_id' => 2,
                'authors' => 'Ning WANG',
                'file_url' => 'article_files/files/22. The_Crisis_of_Comparative_Literature_and_the_Rise_of_World_Literature.pdf',
                'photo_url' => "article_files/photos/img_21.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'A Comparative Study on Imagery in Chinese and
English Poetry',
                'locale_id' => 2,
                'authors' => 'Zhu Hui',
                'file_url' => 'article_files/files/23. A_Comparative_Study_on_Imagery_in_Chinese_and_English_Poetry_1.pdf',
                'photo_url' => "article_files/photos/img_22.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'The Construction of a New Paradigm of Comparative Literature Studies',
                'locale_id' => 2,
                'authors' => 'Shunqing Cao',
                'file_url' => 'article_files/files/24. The_Construction_of_a_New_Paradigm_of_Comparative_Literature_Studies.pdf',
                'photo_url' => "article_files/photos/img_23.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'A Comparative Analysis of “”and Liberalism',
                'locale_id' => 2,
                'authors' => 'Ying LIU',
                'file_url' => 'article_files/files/25. A Comparative Analysis of   and Liberalism 1.pdf',
                'photo_url' => "article_files/photos/img_24.png",
                'published_date' => '09-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'The Glamor of Poetry: A Comparative Study of
Zhang Ailing’s and Katherine Mansfield’s Short
Stories',
                'locale_id' => 2,
                'authors' => 'Haixia Guo',
                'file_url' => 'article_files/files/26. The_Glamor_of_Poetry_A_Comparative_Study_of_Zhang_Ailing_s_and_Katherine.pdf',
                'photo_url' => "article_files/photos/img_25.png",
                'published_date' => '05-01-22 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Pound’s Conception of Comparison and His
Comparative Poetics',
                'locale_id' => 2,
                'authors' => 'Naikan Tao',
                'file_url' => 'article_files/files/27. Pound s Conception of Comparison and His Comparative Poetics.pdf',
                'photo_url' => "article_files/photos/img_26.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Beginning of the New Century: Comparative
Literature in the Cross-Cultural
Context—comments on the 7th Triennial
Conference of Chinese Comparative Literature
Association and the International Conference',
                'locale_id' => 2,
                'authors' => 'Aimin Cheng, Jinglie Lu, Huan Lian & You Huang',
                'file_url' => 'article_files/files/28. Beginning_of_the_New_Century_Comparative_Literature_in_the_Cross.pdf',
                'photo_url' => "article_files/photos/img_27.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Chinese and American Scholars on the “Path of
Comparative Literature” — Preface to 1979-2009:
Retrospect of the Development of Comparative
Literature Studies of China',
                'locale_id' => 2,
                'authors' => 'Weiliang HUANG & Xiaocheng LIU (Translator)',
                'file_url' => 'article_files/files/29. Chinese_and_American_Scholars_on_the_Path_of_Comparative_Literature.pdf',
                'photo_url' => "article_files/photos/img_28.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Comparative Literature in Korea',
                'locale_id' => 2,
                'authors' => 'Tae Kim Sang',
                'file_url' => 'article_files/files/30. Comparative Literature in Korea.pdf',
                'photo_url' => "article_files/photos/img_29.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Goethe and Comparative Literature',
                'locale_id' => 2,
                'authors' => 'Yang Wuneng',
                'file_url' => 'article_files/files/31. Goethe and Comparative Literature.pdf',
                'photo_url' => "article_files/photos/img_30.png",
                'published_date' => '06-08-18 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Medio-translatology: New Perspectives on
Comparative Literature and Translation Studies',
                'locale_id' => 2,
                'authors' => 'Tianzhen Xie',
                'file_url' => 'article_files/files/33. Medio_translatology_New_Perspectives_on_Comparative_Literature_and.pdf',
                'photo_url' => "article_files/photos/img_32.png",
                'published_date' => '01-08-17 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'The Legitimacy of Comparative Literature and the
Variation Studies of Comparative Literature',
                'locale_id' => 2,
                'authors' => 'Shunqing CAO & Ying LIU (Translator)',
                'file_url' => 'article_files/files/34, The_Legitimacy_of_Comparative_Literature_and_the_Variation_Studies.pdf',
                'photo_url' => "article_files/photos/img_33.png",
                'published_date' => '09-08-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'T.S. Eliot’s Modern Style as Reflected in Sherko
Bekas’s Poem “A Fall Letter”: A Comparative Study',
                'locale_id' => 2,
                'authors' => 'Mariwan Hasan',
                'file_url' => 'article_files/files/35. T_S_Eliot_s_Modern_Style_as_Reflected_in_Sherko_Bekas_s_Poem_A_Fall.pdf',
                'photo_url' => "article_files/photos/img_34.png",
                'published_date' => '15-11-22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Representation and Contextualization: A
Comparative Study of The Joy Luck Club and Typical
American',
                'locale_id' => 2,
                'authors' => 'Li Wang',
                'file_url' => 'article_files/files/36. Representation_and_Contextualization_A_Comparative_Study_of_The.pdf',
                'photo_url' => "article_files/photos/img_35.png",
                'published_date' => '04-07-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Comparative Literature Institute and Department
of Comparative Literature of Sichuan University',
                'locale_id' => 2,
                'authors' => 'Xiaoping Fei',
                'file_url' => 'article_files/files/37. Comparative_Literature_Institute_and_Department_of_Comparative_Literature.pdf',
                'photo_url' => "article_files/photos/img_36.png",
                'published_date' => '06-08-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Comparative Literature & Comparative Culture
Institute of Tianjin Normal University',
                'locale_id' => 2,
                'authors' => 'Kiritilmagan',
                'file_url' => 'article_files/files/38.Comparative_Literature_Comparative_Culture_Institute_of_Tianjin.pdf',
                'photo_url' => "article_files/photos/img_37.png",
                'published_date' => '06-08-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Feminine Writing Within the Hybrid Cultural
Context — A Comparative Study of Overseas
Chinese Women Writings',
                'locale_id' => 2,
                'authors' => 'Xiao Wei',
                'file_url' => 'article_files/files/39. Feminine_Writing_Within_the_Hybrid_Cultural_Context_A_Comparative.pdf',
                'photo_url' => "article_files/photos/img_38.png",
                'published_date' => '06-08-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Cross-Culture: A New Change and Breakthrough of
Comparative Literature',
                'locale_id' => 2,
                'authors' => 'Shunqing Cao',
                'file_url' => 'article_files/files/40. Cross_Culture_A_New_Change_and_Breakthrough_of_Comparative_Literature.pdf',
                'photo_url' => "article_files/photos/img_39.png",
                'published_date' => '06-08-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'Shakespeare’s Macbeth and Vishal Bhardwaj’s
Maqbool: A Comparative Analysis',
                'locale_id' => 2,
                'authors' => 'Fatimah Javed',
                'file_url' => 'article_files/files/41. Shakespeare_s_Macbeth_and_Vishal_Bhardwaj_s_Maqbool_A_Comparative.pdf',
                'photo_url' => "article_files/photos/img_40.png",
                'published_date' => '20-11-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'The Mission of Research on Globalization and
Comparative Literature',
                'locale_id' => 2,
                'authors' => 'Li Weifang',
                'file_url' => 'article_files/files/42. The_Mission_of_Research_on_Globalization_and_Comparative_Literature.pdf',
                'photo_url' => "article_files/photos/img_41.png",
                'published_date' => '15-08-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'About the Situation of the Discipline of
Comparative Literature and Neighboring Fields in
the Humanities Today',
                'locale_id' => 2,
                'authors' => 'Steven Tötösy de Zepetnek',
                'file_url' => 'article_files/files/43. About_the_Situation_of_the_Discipline_of_Comparative_Literature.pdf',
                'photo_url' => "article_files/photos/img_42.png",
                'published_date' => '18-12-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Civilizations Review',
                'journal_name' => 'Book Review: Philip Ball. The Water Kingdom: A Secret History of
China
',
                'locale_id' => 2,
                'authors' => 'Robert Bedesk',
                'file_url' => 'article_files/files/44. Book_Review_Philip_Ball_i_The_Water_Kingdom_A_Secret_History.pdf',
                'photo_url' => "article_files/photos/img_43.png",
                'published_date' => '18-12-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Civilizations Review',
                'journal_name' => 'The Applicability of Lessons from American Society for the
European Union: Tolerance, Demographic Change, and Social
Structure',

                'locale_id' => 2,
                'authors' => 'Joseph Drew',
                'file_url' => 'article_files/files/45. The_Applicability_of_Lessons_from_American_Society_for_the_Europe.pdf',
                'photo_url' => "article_files/photos/img_44.png",
                'published_date' => '2023-8-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'UFigures of the Resurrection in O Pai da Menina Morta [The Dead
Girl’s Father], by Tiago Ferro / Figurações da ressurreição em O pai da
menina morta, de Tiago Ferro',

                'locale_id' => 2,
                'authors' => 'Camila Concato
Thiago Cavalcante Jeronimo',
                'file_url' => 'article_files/files/47. Figures_of_the_Resurrection_in_O_Pai_da_Menina_Mor.pdf',
                'photo_url' => "article_files/photos/img_46.png",
                'published_date' => '2024-3-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CENTRAL ASIAN JOURNAL OF LITERATURE, PHILOSOPHY
AND CULTURE',
                'journal_name' => '“We must meet apart”: A Study of Man-Woman Relationship in Emily
Dickinson`s Poetry',

                'locale_id' => 2,
                'authors' => 'Dr. Suvapriya Chatterjee',
                'file_url' => 'article_files/files/64-Article Text-1828-2-10-20230617.pdf',
                'photo_url' => "article_files/photos/img_47.png",
                'published_date' => '2020-10-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CENTRAL ASIAN JOURNAL OF LITERATURE, PHILOSOPHY
AND CULTURE',
                'journal_name' => '“Common Cultural Roots in Uzbeks and Ayns',

                'locale_id' => 2,
                'authors' => 'Urak Pazilovich Lafasov',
                'file_url' => 'article_files/files/1038-Article Text-2072-1-10-20231106.pdf',
                'photo_url' => "article_files/photos/img_48.png",
                'published_date' => '2023-11-13',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'COMPARATIVE LITERATURE IN FAULKNER’S A ROSE FOR EMILY AND
PRAMOEDYA’S PANGGIL SAJA AKU KARTINI',
                'journal_name' => 'SPM UNGGULAN AMANATUL UMMAH',

                'locale_id' => 2,
                'authors' => 'ImaMasofa',
                'file_url' => 'article_files/files/1115-Article Text-3504-2-10-20181019.pdf',
                'photo_url' => "article_files/photos/img_49.png",
                'published_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'University of California Press on behalf of the International Society for the
History of Rhetoric',
                'journal_name' => 'Kiritilmagan',

                'locale_id' => 2,
                'authors' => 'Christopher D. Johnson',
                'file_url' => 'article_files/files/Abbott-RhetoricaJournalHistory-2012.pdf',
                'photo_url' => "article_files/photos/img_50.png",
                'published_date' => '19-06-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penn State University Press',
                'journal_name' => 'Cultural Studies and Comparative Literature?',

                'locale_id' => 2,
                'authors' => 'Michael Bérubé',
                'file_url' => 'article_files/files/Brub-CulturalStudiesComparative-2005.pdf',
                'photo_url' => "article_files/photos/img_51.png",
                'published_date' => '19-06-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Purdue University',
                'journal_name' => 'Comparative Literature, (Comparative) Cultural Studies, Aesthetic Education, and the
Humanities',

                'locale_id' => 2,
                'authors' => 'Kiritilmagan',
                'file_url' => 'article_files/files/Comparative Literature (Comparative) Cultural Studies Aesthetic.pdf',
                'photo_url' => "article_files/photos/img_52.png",
                'published_date' => '02-01-13',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penn State University Press',
                'journal_name' => 'Comparative Literature/World Literature: A Discussion with Gayatri Chakravorty Spivak
and David Damrosch',

                'locale_id' => 2,
                'authors' => 'David Damrosch and Gayatri Chakravorty Spivak',
                'file_url' => 'article_files/files/Damrosch-ComparativeLiteratureWorldLiterature-2011.pdf',
                'photo_url' => "article_files/photos/img_53.png",
                'published_date' => '19-06-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'Translation Studies versus Comparative Literature?',

                'locale_id' => 2,
                'authors' => 'Duncan Large',
                'file_url' => 'article_files/files/Discourse and ideology in translated children s literature a comparative study.pdf',
                'photo_url' => "article_files/photos/img_54.png",
                'published_date' => '13-10-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'Translation Studies versus Comparative Literature?',

                'locale_id' => 2,
                'authors' => 'Duncan Large',
                'file_url' => 'article_files/files/document.pdf',
                'photo_url' => "article_files/photos/img_55.png",
                'published_date' => '13-10-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'INTERNATIONAL TRANSACTIONS ON ELECTRICAL ENERGY SYSTEMS',
                'journal_name' => 'Pattern recognition techniques for power transformer insulation
diagnosis—a comparative study part 1: framework, literature,
and illustration',

                'locale_id' => 2,
                'authors' => 'Yi Cui, Hui Ma*,† and Tapan Saha',
                'file_url' => 'article_files/files/International Transactions on Electrical Energy Systems - 2014 - Cui - Pattern recognition techniques for power transformer.pdf',
                'photo_url' => "article_files/photos/img_56.png",
                'published_date' => '13-10-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'H Y P H O T H E S I S R E V I E W',
                'journal_name' => 'Transcriptomic effect marker patterns of genotoxins – a
comparative study with literature data',

                'locale_id' => 2,
                'authors' => 'Katrin Kreuzer | Falko Frenzel | Alfonso Lampen | Albert Braeuning |
Linda Böhmert',
                'file_url' => 'article_files/files/J of Applied Toxicology - 2019 - Kreuzer - Transcriptomic effect marker patterns of genotoxins a comparative study with.pdf',
                'photo_url' => "article_files/photos/img_57.png",
                'published_date' => '13-10-19',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'Open Versus Endovascular Repair
of Inflammatory Abdominal Aortic
Aneurysms: A Comparative Study
and Meta-Analysis of the Literature',

                'locale_id' => 2,
                'authors' => 'Stavros K. Kakkos, MD, PhD, RVT1, Konstantinos O. Papazoglou, MD, PhD2,
Ioannis A. Tsolakis, MD, PhD1, George Lampropoulos, MD, PhD1,
Spyros I. Papadoulas, MD, PhD1, and Pavlos N. Antoniadis, MD, PhD3',
                'file_url' => 'article_files/files/kakkos-et-al-2015-open-versus-endovascular-repair-of-inflammatory-abdominal-aortic-aneurysms-a-comparative-study-and.pdf',
                'photo_url' => "article_files/photos/img_58.png",
                'published_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penn State University Press',
                'journal_name' => 'Comparative Literature in East Asia',

                'locale_id' => 2,
                'authors' => 'Liu Kang',
                'file_url' => 'article_files/files/Kang-IntroductionComparativeLiterature-2017.pdf',
                'photo_url' => "article_files/photos/img_59.png",
                'published_date' => '18-01-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tsinghua University and Shanghai Jiao Tong University',
                'journal_name' => 'On World Literatures, Comparative Literature, and (Comparative) Cultural Studies',

                'locale_id' => 2,
                'authors' => 'Ning Wang',
                'file_url' => 'article_files/files/On World Literatures Comparative Literature and (Comparative) C.pdf',
                'photo_url' => "article_files/photos/img_61.png",
                'published_date' => '01-08-13',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => ' International Journal of Literature and Arts',
                'journal_name' => 'Comparative Literature Studies',

                'locale_id' => 2,
                'authors' => 'Elmas Sahin',
                'file_url' => 'article_files/files/oncomparativeliterature10.11648.j.ijla.s.2016040101.12 (1).pdf',
                'photo_url' => "article_files/photos/img_62.png",
                'published_date' => '16-11-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penn State University Press',
                'journal_name' => 'Comparative Literature Studies',

                'locale_id' => 2,
                'authors' => 'Katherine Anderson',
                'file_url' => 'article_files/files/project_muse_661080.pdf',
                'photo_url' => "article_files/photos/img_63.png",
                'published_date' => '19-06-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penn State University Press',
                'journal_name' => 'Harabat and Reframing the History of Comparative Literature',

                'locale_id' => 2,
                'authors' => 'C. Ceyhun Arslan',
                'file_url' => 'article_files/files/project_muse_680887.pdf',
                'photo_url' => "article_files/photos/img_64.png",
                'published_date' => '19-06-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penn State University Press',
                'journal_name' => 'Comparing the Literatures: Literary Studies in a Global Age',

                'locale_id' => 2,
                'authors' => 'Charlotte Eubanks',
                'file_url' => 'article_files/files/project_muse_803515.pdf',
                'photo_url' => "article_files/photos/img_65.png",
                'published_date' => '19-06-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penn State University Press',
                'journal_name' => 'Modernism after Postcolonialism: Toward a Nonterritorial',

                'locale_id' => 2,
                'authors' => 'Jesse Wolfe',
                'file_url' => 'article_files/files/project_muse_803516.pdf',
                'photo_url' => "article_files/photos/img_66.png",
                'published_date' => '19-06-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Akadémiai Kiadó, Budapest',
                'journal_name' => 'East‑Central Europe in comparative literature studies:
introduction',

                'locale_id' => 2,
                'authors' => 'Péter Hajdu1',
                'file_url' => 'article_files/files/s11059-020-00556-9.pdf',
                'photo_url' => "article_files/photos/img_67.png",
                'published_date' => '19-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comparative Literature: East & West',
                'journal_name' => 'The Variation Theory of Comparative Literature
(Bijiao Wenxue Bianyixue)',

                'locale_id' => 2,
                'authors' => 'Ziqiang Zhao',
                'file_url' => 'article_files/files/The_Variation_Theory_of_Comparative_Literature_Bijiao_Wenxue_Bianyixue.pdf',
                'photo_url' => "article_files/photos/img_68.png",
                'published_date' => '22-05-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penn State University Press',
                'journal_name' => 'Cross-Cultural Reading',

                'locale_id' => 2,
                'authors' => 'Yehong Zhang and Gerhard Lauer',
                'file_url' => 'article_files/files/Zhang-IntroductionCrossCulturalReading-2017.pdf',
                'photo_url' => "article_files/photos/img_69.png",
                'published_date' => '19-06-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penn State University Press',
                'journal_name' => 'The Essence of Literature as the Symbol of Life Pain: Comparative Analysis of Travel
Literature in Chinese',

                'locale_id' => 2,
                'authors' => 'Shoutong Zhu',
                'file_url' => 'article_files/files/Zhu-EssenceLiteratureSymbol-2017.pdf',
                'photo_url' => "article_files/photos/img_70.png",
                'published_date' => '19-06-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'CENTRAL ASIAN JOURNAL OF LITERATURE,
PHILOSOPHY AND CULTURE',

                'locale_id' => 8,
                'authors' => 'Собирова Гульчирой Эргашбаевна
',
                'file_url' => 'article_files/files/72-Article Text-226-1-10-20210306.pdf',
                'photo_url' => "article_files/photos/img_71.png",
                'published_date' => '19-02-21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Российский государственный гуманитарный университет',
                'journal_name' => 'Эпохи взаимодействие литуратур востока и запада',

                'locale_id' => 8,
                'authors' => 'П.А.Гринцер
',
                'file_url' => 'article_files/files/Epokhi_vzaimodeystvia_literatur_Vostoka_i_Zapada_Grintser_P_A.pdf',
                'photo_url' => "article_files/photos/img_72.png",
                'published_date' => '19-02-21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Российская академия наук институт мировой литурературы им. А.М.Горького',
                'journal_name' => 'Восток в русской литературе
XVIII — начала XX века',

                'locale_id' => 8,
                'authors' => 'Е.Н.Афанасьевой
',
                'file_url' => 'article_files/files/gromova_opul_skaya_l_d_vostok_v_russkoy_literature_xviii_nac (1).pdf',
                'photo_url' => "article_files/photos/img_73.png",
                'published_date' => '19-02-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Узбекский государственный университет
мировых языков',
                'journal_name' => 'КОНЦЕПТУАЛЬНЫЕ ТЕНДЕНЦИИ РАЗВИТИЯ СОВРЕМЕННОЙ
ФИЛОЛОГИЧЕСКОЙ (ЛИТЕРАТУРОВЕДЧЕСКОЙ)
КОМПАРАТИВИСТИКИ',

                'locale_id' => 8,
                'authors' => 'Гульчира ГАРИПОВА
',
                'file_url' => 'article_files/files/Гарипова Статья.pdf',
                'photo_url' => "article_files/photos/img_74.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'ОППОЗИЦИЯ «ВОСТОК–ЗАПАД»
В ИСТОРИИ СРАВНИТЕЛЬНОЙ ПОЭТИКИ',

                'locale_id' => 8,
                'authors' => 'Б.П. Маслов
',
                'file_url' => 'article_files/files/Поэтика_в_контексте_сравнительных_дисциплин.pdf',
                'photo_url' => "article_files/photos/img_75.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Литовский эдукологический университет',
                'journal_name' => 'Русистика и компаративистика',

                'locale_id' => 8,
                'authors' => 'М.Б.Лоскутникова
',
                'file_url' => 'article_files/files/Русистика и компаративистика. Выпуск VII. Книга 2. Литературоведение. Сборник научных статей (Эсалнек А.Я., Лос... (Z-Library).pdf',
                'photo_url' => "article_files/photos/img_76.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Тюменский государственный университет',
                'journal_name' => 'СРАВНИТЕЛЬНОЕ ЛИТЕРАТУРОВЕДЕНИЕ КАК УНИВЕРСИТЕТСКАЯ ДИСЦИПЛИНА',

                'locale_id' => 8,
                'authors' => 'Данилина Галина Ивановна
',
                'file_url' => 'article_files/files/СРАВНИТЕЛЬНОЕ_ЛИТЕРАТУРОВЕДЕНИЕ_КАК_УНИВЕРСИТЕТСКАЯ_ДИСЦИПЛИНА.pdf',
                'photo_url' => "article_files/photos/img_77.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'Edebiyatın Menşei, Karşılaştırmalı
(Mukayeseli/Komparatistik) Edebiyatın
Dünya ve Türk Edebiyatındaki Yeri
Hakkında Bir İncelem',

                'locale_id' => 15,
                'authors' => 'İsmail TURAN
',
                'file_url' => 'article_files/files/22_İsmail-TURAN-_-Edebiyatın-MenşeiKarşılaştırmalı-1.pdf',
                'photo_url' => "article_files/photos/img_78.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EskiĢehir Osmangazi Üniversitesi',
                'journal_name' => 'KARġILAġTIRMALI EDEBĠYAT VE MĠTOLOJĠ ĠLĠġKĠSĠ1',

                'locale_id' => 15,
                'authors' => 'Medine SĠVRĠ2
IĢıl KÖYLÜ
',
                'file_url' => 'article_files/files/477_6_Qarshilashdirmali_Edebiyat_Ve_Mitoloji_Ilishgisi_Medine_Sivri.pdf',
                'photo_url' => "article_files/photos/img_79.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kırıkkale Üniversitesi,',
                'journal_name' => 'Karşılaştırmalı Edebiyat Araştırmaları Açısından
Klasik Türk Edebiyatı ile İran Edebiyatı',

                'locale_id' => 15,
                'authors' => 'Adnan KARAİSMAİLOĞLU
',
                'file_url' => 'article_files/files/3364-published (2).pdf',
                'photo_url' => "article_files/photos/img_80.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Literature and History of Turkish or Turkic',
                'journal_name' => 'Karşılaştırmalı Edebiyat Hocası Tanım',

                'locale_id' => 15,
                'authors' => 'Hacer GÜLŞEN*
',
                'file_url' => 'article_files/files/acarindex-1423933805.pdf',
                'photo_url' => "article_files/photos/img_81.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'Karşılaştırmalı Edebiyat Hocası Tanım',

                'locale_id' => 15,
                'authors' => '*
',
                'file_url' => 'article_files/files/dokumen.tips_karsilastirmali-edebiyat-hocasi.pdf',
                'photo_url' => "article_files/photos/img_82.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'International Journal of Cultural and Social Studies',
                'journal_name' => 'Edebiyat ve Mekân Bağlamında Safiye Erol’un Ülker Fırtınası Romanı
Üzerine Bir İnceleme1',

                'locale_id' => 15,
                'authors' => 'Macit BALIK
',
                'file_url' => 'article_files/files/Edebiyat_ve_Mek_n_Ba_lam_nda_Safiye_Erol_un_lker_F_rt_nas_Roman.pdf',
                'photo_url' => "article_files/photos/img_83.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cukurova Universiteti',
                'journal_name' => 'Kibatek Edebiyat Sempozyumu',

                'locale_id' => 15,
                'authors' => 'Macit BALIK
',
                'file_url' => 'article_files/files/elmas-kibatek-karsilastirmali-edebiyat-hg4s.pdf',
                'photo_url' => "article_files/photos/img_84.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'Turnalar',

                'locale_id' => 15,
                'authors' => 'Kiritilmagan',
                'file_url' => 'article_files/files/elmas-yitik-kusak-turnalar-jupx.pdf',
                'photo_url' => "article_files/photos/img_85.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'KARŞILAŞTIRMALI EDEBİYATIN YAYILMA ALANI',

                'locale_id' => 15,
                'authors' => 'Ertuğrul AYDIN1
',
                'file_url' => 'article_files/files/ertugrul_aydin_karsilastirmali_edebiyat_yayilma_alani.pdf',
                'photo_url' => "article_files/photos/img_86.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'KARŞILAŞTIRMALI EDEBİYATIN YAYILMA ALANI',

                'locale_id' => 15,
                'authors' => 'Ertuğrul AYDIN1
',
                'file_url' => 'article_files/files/ertugrul_aydin_karsilastirmali_edebiyat_yayilma_alani.pdf',
                'photo_url' => "article_files/photos/img_86.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Selçuk Üniversitesi Edebiyat Fakültesi',
                'journal_name' => 'Genel ve Karşılaştırmalı Edebiyat Bilimi’nin (Komparatistik) Ulusal ve
Dünya Edebiyatları Ekseninde Kuramsal Açılımı',

                'locale_id' => 15,
                'authors' => 'Doç. Dr. Ahmet Cuma
',
                'file_url' => 'article_files/files/Genel_ve_Karsilastirmali_Edebiyat_Biliminin_Kompa.pdf',
                'photo_url' => "article_files/photos/img_87.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'NEDEN Mİ KARŞILAŞTIRMALI EDEBİYAT? ',

                'locale_id' => 15,
                'authors' => '
',
                'file_url' => 'article_files/files/karsilastirmali-edebisyat-adana-bildiri-yayinlandi.pdf',
                'photo_url' => "article_files/photos/img_88.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => ' Erciyes Üniversitesi Eğitim Fakültesi, Kayseri',
                'journal_name' => 'Karşılaştırmalı Edebiyatın Türkiye’deki Öncüleri: Leo Spitzer - Erich Auerbach ',

                'locale_id' => 15,
                'authors' => 'Hüseyin ARAK
',
                'file_url' => 'article_files/files/Karslastrmal Edebiyatn Turkiye deki Onculeri_ Leo Spitzer.pdf',
                'photo_url' => "article_files/photos/img_89.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '  Ankara Üniversitesi TÖMER Öğretim Üyesi.',
                'journal_name' => 'Avrasya Türkçelerinin
Karşılaştırmalı İncelenmesi',

                'locale_id' => 15,
                'authors' => 'Prof. Dr. Mehman Musaoğlu
',
                'file_url' => 'article_files/files/mk_1.pdf',
                'photo_url' => "article_files/photos/img_90.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'journal_name' => 'ULUSLAR ARASI BİR BİLGİ ŞÖLENİ: KARŞıLAŞTıRMALı
EDEBİYAT ARAŞTIRMALARI SEMPOZYUMU III',

                'locale_id' => 15,
                'authors' => 'PROF. DR. SAİM SAKAOGLU
',
                'file_url' => 'article_files/files/pdffox.com_karlatrmal-edebiyat-aratrmalar-sempozyumu-iii.pdf',
                'photo_url' => "article_files/photos/img_91.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eskisehir Osmangazi Universiteti',
                'journal_name' => 'Turkiye`de kashtirmali Edebiyat Calismalari',

                'locale_id' => 15,
                'authors' => 'PROF. DR. Ali Gultekin
',
                'file_url' => 'article_files/files/T_rkiye`de_Kar_la_t_rmal_Edebiyat_al_malar_#11677_10786.pdf',
                'photo_url' => "article_files/photos/img_92.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aydın Adnan Menderes Üniversitesi',
                'journal_name' => 'Ulusal Edebiyata Katkısı Bağlamında Karşılaştırmalı Edebiyat`ın İşlevselliği
Üzerine On the Functionality of Comparative Literature in Terms of
Contribution to National Literature',

                'locale_id' => 15,
                'authors' => 'Gökhan şefik Erkurt
',
                'file_url' => 'article_files/files/UlusalEdebiyataKatksBalamndaKarlatrmalEdebiyatnlevselliizerine.pdf',
                'photo_url' => "article_files/photos/img_93.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Selçuk Üniversitesi
Türkiyat Araştırmaları Enstitüsü Türkiyat Araştırmaları Dergis',
                'journal_name' => 'KARŞILAŞTIRMALI EDEBĐYAT BĐLĐMĐ ve BĐR UYGULAMA',

                'locale_id' => 15,
                'authors' => 'Yavuz BAYRAM *
',
                'file_url' => 'article_files/files/yavuz_bayram_karsilastirmali_edebiyat_bilimi_uygulama.pdf',
                'photo_url' => "article_files/photos/img_94.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yrd. Doç. Dr. Pamukkale Üniversitesi',
                'journal_name' => 'YENİ TÜRK EDEBİYATINDA KARŞILAŞTIRMALI TEZLER',

                'locale_id' => 15,
                'authors' => 'Ali DONBAY**
',
                'file_url' => 'article_files/files/yen-trk-edebyatinda-karilatirmali-tezler-zet.pdf',
                'photo_url' => "article_files/photos/img_95.png",
                'published_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the 'abstracts' table
        DB::table('articles')->insert($abstracts);
    }
}
