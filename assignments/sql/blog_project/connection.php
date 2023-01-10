<?php

$servername = "localhost";
$username = "root";
$password = "webkul";
$dbname = "blog_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("Error. Not able to establish connection.".$conn->error);
}



// also including the code to create tables if not created already

$sql = "SELECT * FROM users LIMIT 1";
if($conn->query($sql) == false)
{
    $sql = "CREATE TABLE users (
        user_key VARCHAR(20) NOT NULL PRIMARY KEY,
        username VARCHAR(20) NOT NULL,
        pwd VARCHAR(20) NOT NULL
    )";

    if($conn->query($sql) == false)
    {
        die("Error.Table cannot be created.".$conn->error);
    }
}

$sql = "SELECT * FROM posts LIMIT 1";
if($conn->query($sql) == false)
{
    $sql = "CREATE TABLE posts (
        author_key VARCHAR(20) NOT NULL,
        post_key VARCHAR(10) NOT NULL,
        content TEXT(250) NOT NULL,
        FOREIGN KEY (author_key) REFERENCES users(user_key)
    )";

    if($conn->query($sql) == false)
    {
        die("Error.Table cannot be created2.".$conn->error);
    }
}