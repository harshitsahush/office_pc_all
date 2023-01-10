<?php


// this file will create a table with $name in the DB if it doesn't already exits

$sql = "SELECT * FROM notes LIMIT 1";       
// will return false if table does not exists

if($GLOBALS['conn']->query($sql) == false)
{
    $sql = "CREATE TABLE notes(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        pwd VARCHAR(30) NOT NULL,
        info VARCHAR(70) NOT NULL
    )";

    if($GLOBALS['conn']->query($sql) == false)
    {
         die("unsuccessful".$conn->error);
    }
    
}