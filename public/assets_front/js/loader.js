window.addEventListener('load', () => {
    const loader = document.querySelector(".loader")
    var contentElement = document.getElementById("content");

    loader.classList.add("loader-hidden");
    contentElement.removeAttribute("style");


    loader.addEventListener("transitioned", () => {
        document.body.removeChild("loader");
    })
})

window.addEventListener('scroll', () => {
    var revals = document.querySelectorAll(".reveal");

    for (var i = 0; i < revals.length; i++){
        var wh = window.innerHeight;
        var rt = revals[i].getBoundingClientRect().top;
        var rp = 150;

        if (rt < wh - rp){
            revals[i].classList.add('active');
        } else {
            revals[i].classList.remove('active');
        }
    }
})

window.addEventListener('scroll', () => {
    var revals = document.querySelectorAll(".revealx");

    for (var i = 0; i < revals.length; i++){
        var wh = window.innerHeight;
        var rt = revals[i].getBoundingClientRect().top;
        var rp = 150;

        if (rt < wh - rp){
            revals[i].classList.add('active');
        } else {
            revals[i].classList.remove('active');
        }
    }
})

window.addEventListener('scroll', () => {
    var revals = document.querySelectorAll(".revealmx");

    for (var i = 0; i < revals.length; i++){
        var wh = window.innerHeight;
        var rt = revals[i].getBoundingClientRect().top;
        var rp = 150;

        if (rt < wh - rp){
            revals[i].classList.add('active');
        } else {
            revals[i].classList.remove('active');
        }
    }
})


