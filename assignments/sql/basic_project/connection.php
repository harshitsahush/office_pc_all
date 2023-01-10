<?php

$servername = "localhost";
$username = "root";
$password = "webkul";
$dbname = "notes_project";

$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);

if($GLOBALS['conn']->connect_error)
{
    die("Server not reachable.".$GLOBALS['conn']->connect_error);
}