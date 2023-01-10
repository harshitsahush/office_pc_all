<?php
session_start();

$input_current_pass = $input_new_pass = '';
$current_pass_err = $new_pass_err = '';

if(isset($_POST['change_pass']))
{
    if(validate($_POST['current_pass']) && validate($_POST['new_pass']))        // ie not empty
    {
        $input_current_pass = $_POST['current_pass'];
        $input_new_pass = $_POST['new_pass'];

        // check if current password is incorrect
        if($temp == false)                                      
        {
            
        }
        else                                                    // sucessfully changed, redirect to  signin
        {
            session_unset();
            session_destroy();

            redirect("./signin.php");
        }
    }

    else                                            // in case any is empty
    {   
        if(!validate($_POST['current_pass']))
        {
            $current_pass_err = "*Required";
        }
        if(!validate($_POST['new_password']))
        {
            $new_pass_err = "*Required";
        }
    }
}

?>

<html>
    <head>
        <title>Chnage your password</title>
    </head>
    <body>
        <h3>Change your password</h3>
        <form method="post" action="">
            Current password:<input type="password" name="current_pass" />
            <span style="color:red;"><?php echo $current_pass_err; ?></span>
            <br><br>
            New Password:<input type="password" name="new_password" />
            <span style="color:red;"><?php echo $new_pass_err; ?></span>
            <br><br>

            <!-- havent added confirm password box, kyonki aalas -->

            <input type="button" value="Change Password" name="change_pass" />
            <br><br>
            <span style="color:red;"><?php echo $final_err; ?></span>
        </form>
    </body>
</html>
