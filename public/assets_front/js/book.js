document.addEventListener('DOMContentLoaded', function () {
    var showPopupBtns = document.querySelectorAll('.showPopupBtn');
    var closePopupBtn = document.querySelector('.closePopupBtn');
    var popup = document.querySelector('.popup');

    showPopupBtns.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            document.body.style.overflow = 'hidden';
            popup.style.display = 'block';
        });
    });


    window.addEventListener('click', function () {
        // Закрываем всплывающее окно при клике вне него
        document.body.style.overflow = '';
        popup.style.animation = 'fadeOut 0.5s ease-in-out';
        setTimeout(function () {
            popup.style.display = 'none';
            popup.style.animation = '';
        }, 500);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const popupTriggers = document.querySelectorAll('.popup-trigger');
    const closeButtons = document.querySelectorAll('.close-popup');
    const smallScreen = window.matchMedia('(max-width: 2560px)');

    popupTriggers.forEach(trigger => {
        trigger.addEventListener('click', function () {
            const popupId = this.getAttribute('data-popup');
            const popup = document.getElementById(popupId);

            if (popup && smallScreen.matches) {
                popup.style.display = 'block';
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', function () {
            const popup = this.closest('.popup2');
            if (popup) {
                popup.style.display = 'none';
            }
        });
    });
});
// Объединение обработчиков событий для кнопок закрытия
window.addEventListener("load", function () {
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#001a57"
        },
        "button": {
          "background": "#ffd960",
          "color": "#000000"
        }
      },
      "content": {
        "message": "This website uses cookies as well as similar tools and technologies to understand visitors' experiences. By continuing to use this website, you consent to Duke University's usage of cookies and similar technologies, in accordance with the ",
        "dismiss": "I ACCEPT",
        "link": "Duke Privacy Statement.",
        "href": 'https://oarc.duke.edu/privacy/duke-university-privacy-statement'
      },
      "onPopupOpen": function () {
        var dismiss = document.getElementsByClassName("cc-dismiss");
        Array.prototype.forEach.call(dismiss, function (elem) {
          elem.addEventListener("keypress", function (e) {
            if ((e.keyCode == 32) || (e.keyCode == 13)) { e.preventDefault(); e.target.click(); }
          });
        });
      }
    })
  });