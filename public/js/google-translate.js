/*!***************************************************
 * google-translate.js v1.0.4
 * https://Get-Web.Site/
 * author: Vitalii P.
 *****************************************************/

const googleTranslateConfig = {
    /* Original language */
    lang: "uz",

    /* The language we translate into on the first visit*/
    // langFirstVisit: 'ru',

    /* Если скрипт не работает или работает неправильно, раскомментируйте и укажите основной домен в свойстве domain */
    // domain: "Get-Web.Site"
};

/* Custom translation dictionary with multiple languages */
const customTranslations = {
    "G`arb": {
        "uz": "G`arb",
        "ru": "Западные",
        "en": "Western"
    },
    "komparativistika": {
        "uz": "komparativistika",
        "ru": "центры",
        "en": "Comparative Studies"
    },
    "markazlari": {
        "uz": "markazlari",
        "ru": "информатики",
        "en": "Centers"
    },
    "O'zbekiston jahon tillari universiteti":{
        "uz":"O'zbekiston jahon tillari universiteti",
        "ru":"Университет мировых языков Узбекистана",
        "en":"Uzbekistan State World Languages University"
    },
    "Komparativistika platformasi":{
        "uz":"Komparativistika platformasi",
        "ru":"Платформа сравнительных исследований",
        "en":"Platform of Comparative Studies"
    },
    "ALOQA":{
        "uz":"ALOQA",
        "ru":"Контакты",
        "en":"CONTACTS",
    },
    "Oav biz haqimizda":{
        "uz":"Oav biz haqimizda",
        "ru":"СМИ о Нас",
        "en":"Mass media about us",
    },
    "Yo`li":{
        "uz":"Yo`li ",
        "ru":"Йули ",
        "en":" Yuli ",
    },
    "uy":{
        "uz":"uy",
        "ru":" ",
        "en":" ",
    },
    "Turkiya":{
        "uz":"Turkiya",
        "ru":"Турция",
        "en":"Turkiye",
    },
    "Ro'yxatdan o'tish":{
        "uz":"Ro'yxatdan o'tish",
        "ru":"Регистрация",
        "en":"Registration"
    },
    "4.band":{
        "uz":"4. Loyiha doirasida dunyoga mashhur Peter Szondi Institute of Comparative Literature, Freie Universität Berlin, Leibniz-Zentrum für Literatur-und Kulturforschung (ZfL) kabi kiyosiy adabiyotshunoslik markazlari (Germaniya,Berlin), University of Toronto Centre for Comparative Literature(Kanada,Toronto). Yale University Department of Comparative Literature(AQSh, Yel' universiteti), Eskişehir Osmangazi Üniversitesi Karşılaştırmalı Edebiyat Bölümü (Turkiya, Osmangozi universiteti) Harvard University Department of Comparative Literature (AQSh), Indiana University Comparative Literature Department, Columbia University Department of English and Comparative Literature(AQSh), University of Washington Department of Comparative Literature (Vashington) kabi nufuzli universitetlardagi komparativistika ilmiy markazlari bilan akademik hamkorlik o‘rnatish.",
        "ru":"4. В рамках проекта налажено академическое сотрудничество со всемирно известным Институтом сравнительного литературоведения им. Петера Зонди, Свободным университетом Берлина, Центром исследований литературы и культуры имени Лейбница (ZfL) (Берлин, Германия), Центром сравнительного литературоведения Торонтского университета (Торонто, Канада) и центрами сравнительных исследований престижных университетов, таких как Вашингтонский университет, кафедра сравнительного литературоведения (Вашингтон, Йельский университет, кафедра сравнительного литературоведения (США, Йельский университет), Университет Османгази в Эскишехире (Турция, Университет Османгози), Гарвардский университет, кафедра сравнительного литературоведения (США), Индианский университет, кафедра сравнительного литературоведения, Колумбийский университет, кафедра английского языка и сравнительного литературоведения (США).",
        "en":"4.Within the framework of the project, the establishment of academic cooperation with the world-famous Peter Szondi Institute of Comparative Literature, Freie Universität Berlin, Leibniz-Zentrum für Literatur-und Kulturforschung (ZfL) (Berlin, Germany), University of Toronto Center for Comparative Literature (Toronto, Canada)and comparative research centers of prestigious universities such as University of Washington Department of Comparative Literature (Washington,. Yale University Department of Comparative Literature (USA, Yale University), Eskişehir Osmangazi Üniversitesi Karşılaştırmali Edebiyat Bölümü (Turkey, Osmangozi University) Harvard University Department of Comparative Literature (USA), Indiana University Comparative Literature Department, Columbia University Department of English and Comparative Literature (USA)."
    },
    "5.band":{
        "uz":"5. Platformani kelajakda tijoratlashtirish, shartnoma asosida vebinarlar tashkil qilish.",
        "ru":"5. В перспективе коммерциализация платформы, организация вебинаров на договорной основе.",
        "en":"5. Commercialization of the platform in the future, organization of webinars based on the contract."
    },
    "3.band":{
        "uz":"3. Aynan qiyosiy adabiyotshunoslikka doir O‘zbekistonda va horijda himoya qilingan dissertasiyalarni jamlash va DJVU formatda platformaga yuklash.\n",
        "ru":"3.\tСбор и загрузка на платформу диссертаций по сравнительному литературоведению, защищенных в Узбекистане и за рубежом.\n",
        "en":"3. Compilation of dissertations defended in Uzbekistan and abroad on comparative literature and uploading them to the platform in DJVU format.\n",
    },
    "2.band":{
        "uz":"2. G.Xallieva, U.Jurakulov birgalikda “Qiyosiy adabiyotshunoslik” darsligini yaratish va platformaga joylash.\n",
        "ru":"2.\tСоздание Г. Халлиевой и У. Джуракуловым в соавторстве учебника «Сравнительное литературоведение» и его размещение на платформе.\n",
        "en":"2. G. Hallieva, U. Jurakulov jointly created the textbook \"Comparative Literary Studies\" and put it on the platform.\n",
    },
    "1.band":{
        "uz":"1. “Komparativistika” (Comparative) elektron platformasi uchun ilmiy va badiiy manbalarni yig‘ish. Jumladan, . R. J. Clemens, Pierre Brunel, Claude Pichois, André – Michel Rousseau, N.A.Veselovskiy, N.I.Konrad, V.M.Jirmunskiy, Yu.Lotman,A.Kokorin, I.G.Neupokoeva, V.Ya.Propp, A.Dima, D.Dyurishin,.M.Baxtin, M.G. Bogatkina. V.R.Amineva, G. Xallieva, U.Jurakulov, A.Qosimov kabi olimlarning rus, ingliz, fransuz, nemis, o‘zbek tillaridagi qiyosiy adabiyotshunoslikka doir ilmiy asarlarini DJVU formatda platformaga yuklash.\n",
        "ru":"1.\tСбор научных и художественных источников для электронной платформы «Компаративистика». В том числе загрузка на платформу в формате DJVU научных работ в области сравнительного литературоведения на русском, английском, французском, немецком, узбекском языках таких ученых, как Р.Дж. Клеменс (R. J. Clemens), Пьер Брюнель (Pierre Brunel), Клод Пишуа (Claude Pichois), Андре-Мишель Руссо (André-Michel Rousseau), А.Н. Веселовский, Н.И. Конрад, В.М. Жирмунский, Ю.М. Лотман, A. Kокорин, И.Г. Неупокоева, В. Я. Пропп, А. Дима (A. Dima), Д. Дюришин (D. Dyurishin). М. Бахтин, М.Г. Богаткина, В.Р. Аминева, Г. Халлиева, У. Джуракулов, А. Касымов и др.\n",
        "en":"1. Collection of scientific and artistic resources for the electronic platform \"Comparative\". Including, . R. J. Clemens, Pierre Brunel, Claude Pichois, André-Michel Rousseau, N. A. Veselovsky, N. I. Konrad, V. M. Zhirmunsky, Yu. Lotman, A. Kokorin, I. G. Neupokoeva, V. Ya. Propp, A. Dima, D. Dyurishin,.M. .Bakhtin, M.G. Bogatkina. Upload scientific works on comparative literary studies in Russian, English, French, German, Uzbek languages by scientists such as V.R. Amineva, G. Hallieva, U. Jurakulov, A. Kasimov to the platform in DJVU format.\n",
    },
    "text_general":{
        "uz":"Belgilangan maqsadlar\n" +
            "                                                                    quyidagi vazifalarni\n" +
            "                                                                    bajarishni taqozo etadi: ",
        "ru":"Достижение цели создания платформы требует решения следующих задач:"
        ,
        "en": "The set goals require the following tasks:          "
    },

    "OAK":{
      "uz":"OAK",
      "ru":"ВАК",
      "en":"HAC",
    },
    "USHBU SONDA":{
        "uz":"USHBU SONDA",
        "ru":"НА ЭТОМ ВЫПУСКЕ",
        "en":"CURRENT ISSUE",
    },
    "JURNAL HAQIDA":{
        "uz":"JURNAL HAQIDA",
        "ru":"О ЖУРНАЛЕ",
        "en":"ABOUT JOURNAL"
    },
    "JURNALI":{
        "uz":"JURNALI",
        "ru":"НАУЧНЫЙ ЖУРНАЛ",
        "en":"SCIENTIFIC JOURNAL"
    },
    "JURNAL NIZOMI":{
        "uz":"JURNAL NIZOMI",
        "ru":"УСТAВ ЖУРНАЛА",
        "en":"JOURNAL GUIDELINES"
    },
    "journal2":{
        "uz":"2-SON JOURNAL",
        "ru":"ВЫПУСК ЖУРНАЛА 2",
        "en":"JOURNAL ISSUE 2"
    },
    "journal3":{
        "uz":"3-SON JOURNAL",
        "ru":"ВЫПУСК ЖУРНАЛА 3",
        "en":"JOURNAL ISSUE 3"
    },
    "TAHRIRIYAT HAY’ATI":{
        "uz": "TAHRIRIYAT HAY’ATI",
        "en": "EDITORIAL COLLEGE",
        "ru": "РЕДАКЦИОННАЯ КОЛЛЕГИЯ"
    },

    "TAHRIRIYAT KENGASHI":{
        "uz": "TAHRIRIYAT KENGASHI",
        "en": "EDITORIAL BOARD",
        "ru": "РЕДАКЦИОННЫЙ СОВЕТ"
    },

    "guvohnoma":{
        "uz": "KOMPARATIVISTIKA JURNALI GUVOHNOMASI",
        "en": "STATE CERTIFICATE",
        "ru": "ГОСУДАРСТВЕННОЕ УДОСТОВЕРЕНИЕ"
    },

    "KOMPARATIVISTIKA":{
        "uz": "KOMPARATIVISTIKA",
        "en": "KOMPARATIVISTIKA",
        "ru": "KOMPARATIVISTIKA"
    },
    "O'QUV ADABIYOTLARI":{
        "uz":"O'QUV ADABIYOTLARI",
        "ru":"УЧЕБНАЯ ЛИТЕРАТУРА",
        "en":"EDUCATIONAL LITERATURES"
    },
    "s":{
        "uz":"BIZNING JURNAL",
        "ru":"НАШ ЖУРНАЛ",
        "en":"Our journal "
    },
    "ILMIY TADQIQOTLAR":{
        "uz":"ILMIY TADQIQOTLAR",
        "ru":"НАУЧНЫЕ ИССЛЕДОВАНИЯ",
        "en":"SCIENTIFIC STUDIES"
    },
    "Loyihaning maqsad va vazifalari":{
        "uz":"Loyihaning maqsad va vazifalari",
        "ru":"Цель и задачи проекта",
        "en":"Aim and objectives of project"
    },
    "mgbmghjmkgh":{
        "uz":"Imtihonga tayorlash",
        "ru":"Подготовка к экзаменам",
        "en":"Preparation for exams"
    },
    "Tadqiqotlarni o`rgatish":{
        "uz":"Tadqiqotlarni o`rgatish",
        "ru":"Изучение научных источников ",
        "en": "Studying scientific sources"
    },
    "Onlayn maruza":{
        "uz":"Onlayn maruza",
        "ru":"Онлайн-Лекции ",
        "en": "Online maritsa"
    },
    "Fotolar":{
        "uz":"Fotolar",
        "ru":"Фото ",
        "en": "photo"
    },
    "Avtoreferatlar":{
        "uz":"Avtoreferatlar",
        "ru":"Резюме ",
        "en": "resume"
    },
    "Loyiha bo'yicha maqolalar":{
        "uz":"Loyiha bo'yicha maqolalar",
        "ru":"Статьи по проекту",
        "en": "Articles on the project"
    },
    "XIZMATLAR":{
        "uz":"XIZMATLAR",
        "ru":"СЕРВИСЫ",
        "en": "Services"
    },
    "Havola":{
        "uz":"Havola",
        "ru":"Ссылка",
        "en": "Link"
    },
    "O`zbekiston Davlat Jahon tillari Universiteti":{
        "uz":"O`zbekiston Davlat Jahon tillari Universiteti",
        "ru":"Узбекский государственный университет мировых языков",
        "en": "Uzbekistan State World Languages University                                             "
    },

    "Kirish":{
        "uz":"Kirish",
        "ru":"Вход",
        "en": "enter         "
    },
    "Ro'yxatdan o'tish":{
        "uz":"Ro`yxatdan o`tish",
        "ru":"Регистрация",
        "en": "Registration"
    },
    "Komparativistika platformasi":{
        "uz":"Komparativistika platformasi",
        "ru":"Платформа Компаративистика",
        "en": "Platform of Comparative Studies "
    },
    "y":{
        "uz":"G`arb komparativistika markazlari",
        "ru":"Западные центры сравнительных исследований",
        "en": "Western comparative studies center"
    },
    "x":{
        "uz":"Sharq komparativistika markazlari ",
        "ru":"Восточные центры сравнительных исследований",
        "en": "Eastern comparative studies center "
    },
    "Batafsil":{
        "uz":"Batafsil",
        "ru":"Детали",
        "en": "Details          "
    },
    "Komparativistika markazlari ":{
        "uz":"Komparativistika markazlari ",
        "ru":"Центры сравнительных исследований",
        "en": "Centers of comparative studies         "
    },
    "address":{
        "uz":"Manzil: Kichik Xalqa Yo`li ko`chasi, G-9a mavzesi, 21-a uy.",
        "ru":"Адрес:\n" +
            "Ташкент,\n" +
            "улица Кичик Халка Йули (Малая кольцевая дорога), \n" +
            "квартал G-9А, дом 21-а.\n",
        "en":"Address: Tashkent, Kichik Halka Yuli street, G-9A quartel, 21 a"
    },
    "pochta":{
        "uz":"Pochta indeksi: 100138",
        "ru":"Почтовый индекс: 100138",
        "en":"Postal code: 100138"
    },
    "phone":{
        "uz":"+99871 2301292",
        "ru":"+99871 2301292",
        "en":"+99871 2301292"
    },
    "email":{
        "uz":"Email: gulnoz7410@email.ru",
        "ru":"Email: gulnoz7410@email.ru",
        "en":"Email: gulnoz7410@email.ru"
    },
    "fax":{
        "uz":"F:098911335672",
        "ru":"F:098911335672",
        "en":"F:098911335672"
    },
    "k_centers":{
        "uz":"Komparativistika markazlari",
        "ru":"Центры сравнительных исследований",
        "en":"Centers of comparative studies"
    },


    "services-sec1":{
        "uz":" Platfomamizda 10.00.06 – Qiyosiy adabiyotshunoslik, chogʻishtirma tilshunoslik va tarjimashunoslik ixtisosligi boʻyicha mutahasislik fanidan kirish imtihonlariga va malakaviy imtihonlarga tayyorlov xizmatlari koʻrsatiladi.",
        "ru":"10.00.06 - На нашей платформе предоставляются услуги по подготовке к вступительным экзаменам и квалификационным экзаменам по специальности сравнительное литературоведение, гибридное языкознание и переводоведение.",
        "en":"\n" +
            "10.00.06 - Preparation services for entrance exams and qualification exams in the specialty of comparative literature, hybrid linguistics and translation studies are provided on our platform."
    },
    "services-sec2":{
        "uz":"Tadqiqotlarni oʻrgatish qismida Qiyosiy adabiyotshunoslik bo’yicha ilmiy tadqiqot olib borish usul va metodlari o’rgatiladi",
        "ru":"При преподавании научных исследований преподаются методы и приемы проведения научных исследований по сравнительному литературоведению.",
        "en":"\n" +
            "In the teaching of research, methods and methods of conducting scientific research in Comparative Literature are taught."
    },
    "services-sec3":{
        "uz":"Onlayn maʼruza qismida “Qiyosiy adabiyotshunoslik” fani metodologiyasi bo‘yicha onlayn ma’ruzalar tashkil qilinadi. Qiyosiy adabiyotshunoslik nazariyasi, mezonlari, obyekti, predmeti, qiyoslash shartlari, qiyoslashning tipik vaziyatlari va boshqalar tushuntiriladi.",
        "ru":"\n" +
            "В разделе онлайн-лекций организованы онлайн-лекции по методике предмета «Сравнительное литературоведение». Изложены теория сравнительного литературоведения, критерии, объект, предмет, условия сравнения, типичные ситуации сравнения и т.д.",
        "en":"\n" +
            "In the online lecture section, online lectures on the methodology of the subject \"Comparative Literature\" are organized. The theory of comparative literature, criteria, object, subject, terms of comparison, typical situations of comparison, etc. are explained."
    },
    // Add more words and translations as needed
};

$(function () {
    /* Подключаем виджет google translate */
    let script = document.createElement("script");
    script.src = `//translate.google.com/translate_a/element.js?cb=TranslateWidgetIsLoaded`;
    document.getElementsByTagName("head")[0].appendChild(script);
});

function TranslateWidgetIsLoaded() {
    TranslateInit(googleTranslateConfig);
}

function TranslateInit(config) {
    if (config.langFirstVisit && !$.cookie("googtrans")) {
        /* Если установлен язык перевода для первого посещения и куки не назначены */
        TranslateCookieHandler("/auto/" + config.langFirstVisit);
    }

    let code = TranslateGetCode(config);

    if (code == config.lang) {
        /* Если язык по умолчанию совпадает с языком на который переводим, то очищаем куки */
        TranslateCookieHandler(null, config.domain);
    }

    /* Инициализируем виджет с языком по умолчанию */
    new google.translate.TranslateElement({
        pageLanguage: config.lang,
    });

    /* Вешаем событие клик на флаги */
    $("[data-google-lang]").click(function () {
        TranslateCookieHandler("/auto/" + $(this).attr("data-google-lang"), config.domain);
        /* Перезагружаем страницу */
        window.location.reload();
    });

    TranslateHtmlHandler(code);
}

function TranslateGetCode(config) {
    /* Если куки нет, то передаем дефолтный язык */
    let lang =
        $.cookie("googtrans") != undefined && $.cookie("googtrans") != "null"
            ? $.cookie("googtrans")
            : config.lang;
    return lang.match(/(?!^\/)[^\/]*$/gm)[0];
}

function TranslateCookieHandler(val, domain) {
    /* Записываем куки /язык_который_переводим/язык_на_который_переводим */
    $.cookie("googtrans", val);
    $.cookie("googtrans", val, {
        domain: "." + document.domain,
    });

    if (domain == "undefined") return;
    /* записываем куки для домена, если он назначен в конфиге */
    $.cookie("googtrans", val, {
        domain: domain,
    });

    $.cookie("googtrans", val, {
        domain: "." + domain,
    });
}

function TranslateHtmlHandler(code) {
    /* Existing functionality: highlight the active language flag */
    $('[data-google-lang="' + code + '"]').addClass("language__img_active");

    /* Custom translation logic: replace text with custom translations based on language code */
    for (const [original, translations] of Object.entries(customTranslations)) {
        const translated = translations[code];
        if (translated) {
            $("body *:not(script):not(style)").contents().each(function () {
                if (this.nodeType === 3 && this.nodeValue.trim()) {
                    this.nodeValue = this.nodeValue.replace(new RegExp("\\b" + original + "\\b", 'g'), translated);
                }
            });
        }
    }
}
