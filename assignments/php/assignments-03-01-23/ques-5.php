<?php

$master_username = ['uid1', 'uid2', 'uid3', 'uid4'];
$master_password = ['pass1', 'pass2', 'pass3', 'pass4'];

$message='';
$input_username='';
$input_password='';


if(isset($_POST['submit']))
{
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    
/*     echo array_keys($input_username, $master_username);
 */
    if(in_array($input_username, $master_username)==true && in_array($input_password, $master_password)==true)
    {
        if(array_keys($input_username, $master_username) == array_keys($input_password, $master_password))
        {
            $message = "You can enter";
        }
    }
    else
    {
        $message = "You shall not pass";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Simple registration form</title>

    </head>

    <body>
        <form method="post" action="">
            Username: <input type="text" name="username"/>
            <br><br>
            Password: <input type="password" name="password"/>
            <br><br>
            <input type="submit" name="submit"/>
            <br><br>
            <p>
                <?php echo $message; ?>
            </p>
        </form>
    </body>
</html>