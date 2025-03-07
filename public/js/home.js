document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".logo-track");
    let scrollAmount = 0;

    function slideLogos() {
        if (scrollAmount >= slider.scrollWidth / 2) {
            scrollAmount = 0;
            slider.style.transition = "none";
            slider.style.transform = "translateX(0)";
        } else {
            scrollAmount += 1;
            slider.style.transition = "transform 0.05s linear";
            slider.style.transform = `translateX(-${scrollAmount}px)`;
        }
        requestAnimationFrame(slideLogos);
    }

    // Dubbele logo's toevoegen voor naadloze herhaling
    const clone = slider.innerHTML;
    slider.innerHTML += clone;

    // Start de animatie
    slideLogos();
});
