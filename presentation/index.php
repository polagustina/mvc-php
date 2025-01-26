<?php

include "../private/core/View.php";

// Store the requested endpoint
$uri = $_SERVER["REQUEST_URI"];
$urlParams = explode("/", $uri);

$pages = ["", "test"];

// Check if you have the endpoint
if(in_array($urlParams[1], $pages)){

    include "../private/core/Model.php";
    include "../private/core/Controller.php";
    include "../private/core/Api.php";

    $unformattedPageName = explode("-", $urlParams[1]);
    $pageName = "";
    foreach ($unformattedPageName as $string) {
        $pageName .= ucfirst($string);
    }

    if($pageName === "")
        $pageName = "Test";

    $model = $pageName . "Model";
    $view = $pageName . "View";
    $controller = $pageName . "Controller";

    include "../private/models/" . $model . ".php";
    include "../private/views/" . $view . ".php";
    include "../private/controllers/" . $controller . ".php";

    // Load the page dynamically
    $page = new $controller($model, $view);

    exit;

}

// Serve custom error message
$view = new View;

$view->render("Error", function() use($uri){

?>

    <h2>Error</h2>
    <p>This page "<?= $uri ?>" doesn't exist!</p>

<?php

});
