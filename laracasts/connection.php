<?php

$servername = "localhost";
$username = "root";
$password = "webkul";


/* $conn = new mysqli($servername, $username, $password);      //to connect to the server

if($conn->connect_failed)
{
    die("Connection failed");
} */

/* $sql = "CREATE DATABASE myapp";               // to create a new database
if($conn->query($sql) == true)
{
    echo "DB creation successful";
}
else
{
    echo "DB creation failed";
} */

$dbname = "myapp";                                                  //connection to DB
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->conn_failed)
{
    die("DB connection failed");
}

/*                                                                     //create a table named 'posts'
$sql =  "CREATE TABLE posts(                                    
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,      
        firstname  VARCHAR(30) NOT NULL, 
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql) == true)
{
    echo "table creation successful";
}
else
{
    echo "unsuccessful".$conn->error;
} */


/*                                                                 //insert data into the table "posts"
$sql = "INSERT INTO posts (firstname, lastname, email)      
        VALUES ('Harshit', 'Sahu', 'demo@123')";

if($conn->query($sql) == true)
{
    echo "entry successfull";
}
else
{
    echo "entry failed".$conn->error;
} */



