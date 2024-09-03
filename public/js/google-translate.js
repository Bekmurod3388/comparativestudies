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
    "LOYIHA HAQIDA": {
        "uz": "Hola",
        "ru": "Bonjour",
        "en": "Hallo"
    },
    "G`arb": {
        "uz": "G`arb",
        "ru": "Западные",
        "en": "Western"
    },
    "komporavistika": {
        "uz": "komporavistika",
        "ru": "центры",
        "en": "Comparative Studies"
    },
    "markazlari": {
        "uz": "markazlari",
        "ru": "информатики",
        "en": "Centers"
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
