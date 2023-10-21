function setCategory(category) {
    document.querySelectorAll(".button_divider div").forEach(e => {
        e.classList.remove("button_divider-button_active");
        if (e.innerText.toLowerCase() == category) e.classList.add("button_divider-button_active");
    });
}