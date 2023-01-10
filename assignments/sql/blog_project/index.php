<?php

session_start();
include "./connection.php";


if(!isset($_SESSION['userkey']))         // user is not logged in
{
    header("Location:./signin.php");
}

else                                    // ie logged in
{
    header("Location:./dashboard.php");
}