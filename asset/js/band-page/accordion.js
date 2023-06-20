
document.querySelectorAll(".accordion-button").forEach(button => {
    button.addEventListener("click", () => {
        const accordionContent = button.nextElementSibling;
        button.classList.toggle("accordion-button:active");
        if (button.classList.contains("accordion-button:active")) {
            accordionContent.style.display = "block";
        } else {
            accordionContent.style.display = "none";
        }
    });
});