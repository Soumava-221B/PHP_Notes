<?php

// To handle the routes
function routeToController($uri, $routes) {
if (array_key_exists($uri, $routes)) {
require base_path($routes[$uri]);
} else {
abort();
}
}

// To handle different status code
function abort($code = 404)
{
http_response_code($code);

require base_path("views/{$code}.php");

die();
}

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToController($uri, $routes);