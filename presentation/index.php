<?php

include "../logic/core/View.php";

// Obtain requested page
$uri = $_SERVER["REQUEST_URI"];
$urlParams = explode("/", $uri);

// The expected uri is in dash-case
$requestedPage = explode("-", $urlParams[1]);

// And gets converted into CamelCase 
$page = "";
foreach ($requestedPage as $string)
    $page .= ucfirst($string);


// The "/" is treated as the main entrypoint, in this case "Example"
if ($page === "")
    $page = "Example";

// Here you place all the pages you want to serve
$pages = ["Example"];

// Load the page dynamically
if (in_array($page, $pages)) {

    include "../logic/core/Model.php";
    include "../logic/core/Controller.php";
    include "../logic/core/Api.php";

    $modelName      = $page . "Model";
    $viewName       = $page . "View";
    $controllerName = $page . "Controller";

    include "../logic/models/"      . $modelName . ".php";
    include "../logic/views/"       . $viewName . ".php";
    include "../logic/controllers/" . $controllerName . ".php";

    $model      = new $modelName();
    $view       = new $viewName();
    $controller = new $controllerName($model, $view);

    exit;

}

// Serve custom error message
$view = new View();

$view->render("error", function() use($uri) {

?>

    <h2>Error</h2>
    <p>This page "<?= $uri ?>" doesn't exist!</p>

<?php

});
