<?php

ini_set('display_errors', 1);               // to display errors
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include "./connection.php";
include "./functions.php";

$input_username = $input_password = '';
$username_err = $password_err = $final_err = '';

if(isset($_POST['submit']))
{
    if(validate($_POST['username']) && validate($_POST['password']))        // ie not empty
    {
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];

        signup($input_username, $input_password);   
        //if there is error, the functon will automatically throw errors

        // if user has been added, login and redirect to dashboard
        $temp = login($input_username, $input_password);

        if($temp == false)                                      // user not found in DB
        {
            $final_err = "No match was found. Retry or <a href="."'./"."signup.php'>Sign up!</a>";
        }
        {
            $_SESSION['user_key'] = $temp;
            redirect("./dashboard.php");
        }
    }

    else                                            // in case any is empty
    {   
        if(!validate($_POST['username']))
        {
            $username_err = "*Required";
        }
        if(!validate($_POST['password']))
        {
            $password_err = "*Required";
        }
    }
}

?>

<html>
    <head>
        <title>Sign Up page</title>
    </head>
    <body>
        <h3>Sign Up Page</h3>
        <form method="post" action="">
            Username:<input type="text" name="username" />
            <span style="color:red;"><?php echo $username_err; ?></span>
            <br><br>
            Password:<input type="password" name="password" />
            <span style="color:red;"><?php echo $password_err; ?></span>
            <br><br>
            <input type="submit" value="Sign Up!" name="submit" />
            <br><br>
            <span>Have an account? <a href="./signin.php">Sign In!</a></span>
            <br><br>
            <span style="color:red;"><?php echo $final_err; ?></span>
        </form>
    </body>
</html>