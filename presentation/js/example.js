document.addEventListener("DOMContentLoaded", () => {
    const languageSelect = document.getElementById("language-select");
    languageSelect.addEventListener("change", () => {
        setText(languageSelect.value, page);
    });
});