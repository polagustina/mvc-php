<?php

// This class contains the common html of your web
class View {

    // This method is implemented by all the classes that extend View.
    // The "content" parameter contains an anonymous method that renders the specific html of each page dynamically
    public function render($page, $content) {

?>
        <!-- This html will be displayed in all pages -->
        <!DOCTYPE html>
        <html lang="en">
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
                <h1 id="header-1"></h1>
            </header>
            <main>
                <?= $content() ?>
            </main>
            <footer>
                <p><span id="footer-1"></span> <a target="_blank" href="https://github.com/polagustina/mvc-php"><span id="footer-2"></span></a></p>
            </footer>
            <script>
                const page = "<?= $page ?>";
            </script>
        </body>
        </html>

<?php

    }

}