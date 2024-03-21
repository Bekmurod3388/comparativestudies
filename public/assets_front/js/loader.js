window.addEventListener('load', () => {
    const loader = document.querySelector(".loader")
    var contentElement = document.getElementById("content");

    loader.classList.add("loader-hidden");
    contentElement.removeAttribute("style");


    loader.addEventListener("transitioned", () => {
        document.body.removeChild("loader");
    })
})
