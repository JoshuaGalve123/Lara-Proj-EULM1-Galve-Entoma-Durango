document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("read-more-btn");
    const moreText = document.getElementById("about-more");

    if (!button || !moreText) {
        return;
    }

    button.addEventListener("click", function () {
        const isExpanded = this.getAttribute("aria-expanded") === "true";

        moreText.hidden = isExpanded;
        this.setAttribute("aria-expanded", String(!isExpanded));
        this.textContent = isExpanded ? "Read More +" : "Read Less −";
    });
});
