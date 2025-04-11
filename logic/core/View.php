<?php

// This class contains the common html of your web
class View {

    private $language;

    public function __construct($language) {

        $this->language = $language;
        
    }

    // This method is implemented by all the classes that extend View.
    // The "content" parameter contains an anonymous method that renders the specific html of each page dynamically
    public function render($page, $content) {

?>
        <!-- This html will be displayed in all pages -->
        <!DOCTYPE html>
        <html lang="<?= $this->language ?>">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="/css/main.css">
            <link rel="stylesheet" href="/css/<?= $page ?>.css">
            <script src="/js/main.js"></script>
            <script src="/js/<?= $page ?>.js"></script>
            <title id="title"></title>
        </head>
        <body>
            <header>
                <h1 id="h1"></h1>
            </header>
            <main>
                <?= $content() ?>
            </main>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    setLanguage(<?= $this->language ?>);
                });
            </script>
        </body>
        </html>

<?php

    }

}