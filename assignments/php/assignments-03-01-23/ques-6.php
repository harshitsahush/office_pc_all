<?php

    $input_name = $input_email = '';
    if($_POST['submit'])
    {
        $input_name = $_POST['name'];
        $input_email = $_POST['email'];

        $file = fopen("user_contact_data.txt", "a") or die("file not accessible");
        fwrite($file, "$input_name, $input_email");
        fwrite($file, "\n");
        fclose($file);
    }

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Simple registration form</title>

    </head>

    <body>
        <form method="post" action="">
            Name: <input type="text" name="name"/>
            <br><br>
            E-mail: <input type="text" name="email"/>
            <br><br>
            <input type="submit" name="submit"/>
            <br><br>
        </form>
    </body>
</html>