<?php

session_start();
include "./connection.php";
include "./functions.php";

if(!isset($_SESSION['user_key']))         // user is not logged in
{
    header("Location:./signin.php");
}

// ie the user is logged in, therefore show all of his posts

//$data = fetch_data($_SESSION['user_key']);



// delete account
// change password

?>


<html>
    <head>
        <title>Sign In page</title>
    </head>
    <body>
        <h3>Dashboard</h3>

        <div>Show all the posts from the user</div>
       <!--  <div>
            <a href="./change_password.php">Change Password</a>             change password
        </div> -->
        
        <div>
            <a href="./signout.php">Signout!</a>                            <!-- logout -->
        </div>

        <!-- <div>
            <a href="./delete_account.php">Delete Account!</a>              delete account
        </div> -->
    </body>
</html>