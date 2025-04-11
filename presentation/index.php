<?php

include "../logic/core/View.php";

// Store the requested endpoint
$uri = $_SERVER["REQUEST_URI"];
$urlParams = explode("/", $uri);

$pages = ["", "example"];

// Check if you have the endpoint
if(in_array($urlParams[1], $pages)){

    include "../logic/core/Model.php";
    include "../logic/core/Controller.php";
    include "../logic/core/Api.php";

    $unformattedPageName = explode("-", $urlParams[1]);
    $pageName = "";
    foreach ($unformattedPageName as $string) {
        $pageName .= ucfirst($string);
    }

    if($pageName === "")
        $pageName = "Example";

    $modelName      = $pageName . "Model";
    $viewName       = $pageName . "View";
    $controllerName = $pageName . "Controller";

    include "../logic/models/"      . $modelName . ".php";
    include "../logic/views/"       . $viewName . ".php";
    include "../logic/controllers/" . $controllerName . ".php";

    // Load the page dynamically
    $model      = new $modelName();
    $view       = new $viewName($language);
    $controller = new $controllerName($model, $view);

    exit;

}

// Serve custom error message
$view = new View($language);

$view->render("error", function() use($uri) {

?>

    <h2>Error</h2>
    <p>This page "<?= $uri ?>" doesn't exist!</p>

<?php

});
