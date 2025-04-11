function setText(language, file) {
    const files = ["main", file];
  
    files.forEach(filename => {
      fetch(`/i18n/${language}/${filename}.json`)
        .then(res => res.json())
        .then(content => {
          for (const [key, value] of Object.entries(content)) {
            const el = document.getElementById(key);
            if (el) el.innerText = value;
          }
        })
        .catch(err => console.error(`Error loading ${filename}:`, err));
    });
  }
  

document.addEventListener("DOMContentLoaded", () => {
    setText("en", page);
});