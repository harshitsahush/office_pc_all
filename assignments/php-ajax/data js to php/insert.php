<?php

$data = $_GET['data'];


$servername = "localhost";
$username = "root";
$password = "webkul";
$dbname = "ajax-test";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die("cannot connect");
}

$sql = "INSERT INTO table1 (name) VALUES ('$data')";

if($conn->query($sql) != true)
{
    echo "query execution failed".$conn->error;
}

