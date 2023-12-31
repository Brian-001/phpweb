<?php 

$uri = parse_url($_SERVER['REQUEST_URI']) ['path'];


//Associating URI with their corresponding controller
$routes = [
    '/' => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/notes' => "controllers/notes.php",
    '/contact' => "controllers/contact.php",
];


//Function to handle routing
function routeToController($routes, $uri){
    if (array_key_exists($uri, $routes))
    {
        require $routes[$uri];

    } else {

        abort();
    }
}


//Function to handle abort

function abort($code = 404){
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($routes, $uri);
