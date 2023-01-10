<?php
session_start();

ini_set('display_errors', 1);               // to display errors
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "connection.php";
include "functions.php";

session_unset();
session_destroy();

redirect("./signin.php");