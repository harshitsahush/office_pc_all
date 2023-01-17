<?php

$servername = "localhost";
$username = "root";
$password = "webkul";
$dbname = "ajax-test";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die("cannot connect");
}

$sql = "SELECT * FROM table1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$row['name'];

return 10;