<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uri = $_SERVER['REQUEST_URI'];
var_dump($uri);


if($uri == "/assignments/php/laracasts/")
{
    echo "1";
    include "controllers/index.php";
}
else if($uri == "/assignments/php/laracasts/contact")
{
    echo "2";
    include "/assignments/php/laracasts/controllers/contact.php";
}
else if($uri == "/assignments/php/laracasts/about")
{
    echo "3";
    include "/controllers/about.php";
}