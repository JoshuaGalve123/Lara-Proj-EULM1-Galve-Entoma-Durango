// Get the carousel elements
const coffeeSlider = document.getElementById("coffeeSlider");

const prevBtn = document.getElementById("prevBtn");

const nextBtn = document.getElementById("nextBtn");

// Check if all elements exist
if (coffeeSlider && prevBtn && nextBtn) {

    // Get the width of one coffee card plus its gap
    function getScrollAmount() {

        const coffeeCard = coffeeSlider.querySelector(".coffee-card");

        const sliderStyle = window.getComputedStyle(coffeeSlider);

        const gap = parseFloat(sliderStyle.gap) || 0;

        return coffeeCard.getBoundingClientRect().width + gap;
    }

    // Move to the previous coffee
    prevBtn.addEventListener("click", function () {

        coffeeSlider.scrollBy({
            left: -getScrollAmount(),
            behavior: "smooth"
        });

    });

    // Move to the next coffee
    nextBtn.addEventListener("click", function () {

        coffeeSlider.scrollBy({
            left: getScrollAmount(),
            behavior: "smooth"
        });

    });

}