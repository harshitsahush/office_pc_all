<?php

$servername = "localhost";
$username = "root";
$password = "webkul";
$dbname = "myapp";

$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);

if($GLOBALS['conn']->connect_error)
{
    die("Error.".$GLOBALS['conn']->connect_error);
}