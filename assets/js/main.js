document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    const prevBtn = document.querySelector(".carousel-prev");
    const nextBtn = document.querySelector(".carousel-next");
    const items = document.querySelectorAll(".carousel-item");
    const itemWidth = items[0].offsetWidth;
    let currentPosition = 0;

    prevBtn.addEventListener("click", function () {
        if (currentPosition > 0) {
            currentPosition--;
            carousel.style.transform = `translateX(-${currentPosition * itemWidth}px)`;
        }
    });

    nextBtn.addEventListener("click", function () {
        if (currentPosition < items.length - 1) {
            currentPosition++;
            carousel.style.transform = `translateX(-${currentPosition * itemWidth}px)`;
        }
    });
});