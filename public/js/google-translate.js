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
        "en":"Uzbekistan World Languages University"
    },
    "Komparativistika platformasi":{
        "uz":"Komparativistika platformasi",
        "ru":"Платформа сравнительных исследований",
        "en":"Comparative studies platform"
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
    "OAK":{
      "uz":"OAK",
      "ru":"ВАК",
      "en":"HAC",
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
