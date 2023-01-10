<?php

function validate_input($var)
{
    if(isset($var) && !empty($var))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function find_match($stmt, $username, $password)       
// will run the query and return the associative array containing info, else will return false
{
    $stmt->execute();
    $query_result = $stmt->get_result();

    /* Without prepared statements approach
    $sql = "SELECT * FROM notes WHERE username='".$username."' AND pwd='".$password."'";
    $query_result = $GLOBALS['conn']->query($sql);
     */

    if($query_result->num_rows >0)
    {
        return $query_result;
    }
    else
    {
        return false;
    }
}