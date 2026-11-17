
document.addEventListener("DOMContentLoaded", function () {
    const readMoreButton = document.getElementById("read-more-btn");
    const moreText = document.getElementById("about-more");

    // Stop if the About page elements are not found.
    if (!readMoreButton || !moreText) {
        return;
    }

    readMoreButton.addEventListener("click", function () {
        const isExpanded = this.getAttribute("aria-expanded") === "true";

        // Show or hide the additional story.
        moreText.hidden = isExpanded;

        // Update the button state and text.
        this.setAttribute("aria-expanded", String(!isExpanded));
        this.textContent = isExpanded ? "Read More +" : "Read Less −";
    });
});
