const buttons = document.querySelectorAll(".accordion-button");
buttons.forEach(button => {
    button.addEventListener("click", (e) => {
        buttons.forEach(f => f.classList.remove(":active"));
        const accordionContent = button.nextElementSibling;
        e.target.classList.toggle(":active");
        if (e.target.classList.contains(":active")) {
            accordionContent.style.display = "block";
        } else {
            accordionContent.style.display = "none";
        }
    });
});