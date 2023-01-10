<?php

$uri = $_SERVER['REQUEST_URI'];     // to extract url entered

$uri = parse_url($uri)['path'];   // used to extract only the path from the url and ignore the query

                          

/* if($uri == "/laracasts/")                // can be done using this method, switch could also be used
{
    include "controllers/index.php";
}
elseif($uri == "/laracasts/about")
{
    include "controllers/about.php";
}
elseif($uri == "/laracasts/contact")
{
    include "controllers/contact.php";
}
else
{
    echo "page not found!"; 
} */


$routes = [                                             //array approach

    '/laracasts/' => 'controllers/index.php',
    '/laracasts/about' => 'controllers/about.php',
    '/laracasts/contact' => 'controllers/contact.php'
];

if(array_key_exists($uri, $routes))
{
    include $routes[$uri];
}
else
{
    http_response_code(404);
    include "controllers/page_not_found.php";
}
