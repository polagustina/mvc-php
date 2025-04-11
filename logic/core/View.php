<?php

// This class contains the common html of your web
class View {

    // This method is implemented by all the classes that extend View.
    // The "content" parameter contains an anonymous method that renders the specific html of each page dynamically
    public function render($title, $content) {

?>
        <!-- This html will be displayed in all pages -->
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $title ?></title>
        </head>
        <body>
            <header>
                <h1>This is a MVC example with PHP</h1>
            </header>
            <main>
                <?= $content() ?>
            </main>
        </body>
        </html>

<?php

    }

}