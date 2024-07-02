<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

/* Long handed
if ($uri === '/') 
{
    require 'controllers/index.php';
}

else if ($uri === '/about') 
{
    require 'controllers/about.php';
}

else if ($uri === '/contact') 
{
    require 'controllers/contact.php';
}
*/

//Array / List of possible URIs from page links (/, about, etc)
$routes = [
    // '/' corresponds to location of home php file
    '/' => 'controllers/index.php', 
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

//Wrapping 'checking if route exists' logic into function 'routeToController,' giving the functi
function routeToController($uri, $routes) {
    //'Array_key_exists' checks if the first parameter/value/KEY is present in the second parameter (the array ($routes[])
    //'If' the $uri (/, about, contact) does exist in the array (routes[]) (IF TRUTHY)
    if(array_key_exists($uri, $routes)) {
    //Then access the array $routes and REQUIRE the VALID $uri from it. The associative array will give the full path (=> /controllers/index.php)
    require $routes[$uri];
}    else {
    abort();
}
}
function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
}

routeToController($uri, $routes);