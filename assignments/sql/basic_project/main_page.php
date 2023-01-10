<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    

    include "./connection.php";
    include "./create_table.php";
    include "./functions.php";
    //include "./prepared_stmt.php";

    $sql = "SELECT * FROM notes WHERE username=? AND pwd=?";        //prepared statements
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $username, $password);
    
    $username = $password = $final_message = '';
    $username_error = $password_error = '';


    if(isset($_POST['submit']))
    {

        if(validate_input($_POST['first_name']) && validate_input($_POST['last_name']))
        {
            $username = $_POST['first_name'];
            $password = $_POST['last_name'];

            // run the query against the table and fetch the result;
            $result=find_match($stmt, $username, $password);
            if($result == false)
            {
                $final_message = "No record Found";
            }
            else
            {
                while($row = $result->fetch_assoc())
                {
                    $final_message = "Username:".$row['username']. "<br> Info:".$row['info']; 
                }
            }

        }

        else
        {
            if(!validate_input($_POST['first_name']))
            {
                $username_error = "*Required";
            }

            if(!validate_input($_POST['last_name']))
            {
                $password_error = "*Required";
            }
        }
    }

?>

<html>
    <head>
        <title></title>
    <head>
    
    <body>
        <form method='post' action=''>
            Username:<input type="text" name="first_name"/>
            <span style="color:red"><?php echo $username_error; ?></span>
            <br><br>
            Password:<input type="text" name="last_name"/>
            <span style="color:red"><?php echo $password_error; ?></span>
            <br><br>
            <input type="submit" name="submit" />
            <br><br>
            <?php echo $final_message; ?>
        </form>
    </body>
</html>