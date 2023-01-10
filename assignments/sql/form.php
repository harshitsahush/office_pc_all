<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    

    include "./connection.php";
    include "./functions.php";
    include "./prepared_stmt.php";
    
    $fname = $lname = $email = $final_message = '';
    $fname_error = $lname_error = $email_error = '';


    if(isset($_POST['submit']))
    {

        if(validate_input($_POST['first_name']) && validate_input($_POST['last_name']) && validate_input($_POST['email']))
        {
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $email = $_POST['email'];

            insert_into_table($fname, $lname, $email);
        }
        else
        {
            if(!validate_input($_POST['first_name']))
            {
                $fname_error = "*Required";
            }

            if(!validate_input($_POST['last_name']))
            {
                $lname_error = "*Required";
            }

            if(!validate_input($_POST['email']))
            {
                $email_error = "*Required";
            }
        }
    }

?>

<html>
    <head>
        <title>Basic form</title>
    <head>
    
    <body>
        <form method='post' action=''>
            First-Name:<input type="text" name="first_name"/>
            <span style="color:red"><?php echo $fname_error; ?></span>
            <br><br>
            Last-Name:<input type="text" name="last_name"/>
            <span style="color:red"><?php echo $lname_error; ?></span>
            <br><br>
            Email:<input type="email" name="email"/>
            <span style="color:red"><?php echo $email_error; ?></span>
            <br><br>
            <input type="submit" name="submit" />
            <br><br>
            <?php echo $final_message; ?>
        </form>
    </body>
</html>