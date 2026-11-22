document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contact-form");
    if (!form) return;

    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const subjectInput = document.getElementById("subject");
    const messageInput = document.getElementById("message");
    const successBox = document.getElementById("contact-success");

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function setFieldError(input, errorId, message) {
        const errorEl = document.getElementById(errorId);
        if (message) {
            input.classList.add("error-input");
            errorEl.textContent = message;
            return false;
        }
        input.classList.remove("error-input");
        errorEl.textContent = "";
        return true;
    }

    function validateForm() {
        const nameVal = nameInput.value.trim();
        const emailVal = emailInput.value.trim();
        const subjectVal = subjectInput.value.trim();
        const messageVal = messageInput.value.trim();

        const nameValid = setFieldError(
            nameInput,
            "name-error",
            nameVal ? "" : "Please enter your name."
        );

        let emailError = "";
        if (!emailVal) {
            emailError = "Please enter your email address.";
        } else if (!emailRegex.test(emailVal)) {
            emailError = "Please enter a valid email address.";
        }
        const emailValid = setFieldError(emailInput, "email-error", emailError);

        const subjectValid = setFieldError(
            subjectInput,
            "subject-error",
            subjectVal ? "" : "Please enter a subject."
        );

        const messageValid = setFieldError(
            messageInput,
            "message-error",
            messageVal ? "" : "Please enter your message."
        );

        return nameValid && emailValid && subjectValid && messageValid;
    }

    form.addEventListener("submit", (e) => {
        e.preventDefault();
        successBox.hidden = true;
        successBox.textContent = "";

        if (validateForm()) {
            successBox.textContent = `Thank you, ${nameInput.value.trim()}! Your message has been sent to Timpla Café.`;
            successBox.hidden = false;
            form.reset();
        }
    });

    [nameInput, emailInput, subjectInput, messageInput].forEach((input) => {
        input.addEventListener("input", () => {
            successBox.hidden = true;
            validateForm();
        });
    });
});
