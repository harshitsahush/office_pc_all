<?php

// prepared statements for login
$sql_login = "SELECT * FROM users WHERE username=? AND pwd=?";
$stmt_login = $conn->prepare($sql_login);
$stmt_login->bind_param('ss', $var1, $var2);

// prepared statements for signup
$sql_signup = "INSERT INTO users (user_key, username, pwd) VALUES (?, ?, ?)";
$stmt_signup = $conn->prepare($sql_signup);
$stmt_signup->bind_param('sss',$var5, $var3, $var4);


function validate($var)                     //will return true if the url is set and not empty else false
{
    if(isset($var) && !empty($var))
    {
        return true;
    }
    return false;
}

function unique_id_generator($n)            // will return a unique string of length $n
{
    return bin2hex(random_bytes($n/2));
}

function redirect($url)                     // will redirect to $url
{
    header("Location:".$url);
}

function login($username, $password)        // will return userkey if match is found else false
{
    $GLOBALS['var1'] = $username;
    $GLOBALS['var2'] = $password;    
    $GLOBALS['stmt_login']->execute();
    $result = $GLOBALS['stmt_login']->get_result();
    
    if($result->num_rows < 1)
    {
        return false;
    }
    else
    {
        $temp = $result->fetch_assoc();
        return $temp['user_key'];
    }

}

function signup($username, $password)       // will add in DB and return user_key, else return false
{
    $GLOBALS['var3'] = $username;
    $GLOBALS['var4'] = $password;
    $GLOBALS['var5'] = unique_id_generator(10);
    $GLOBALS['stmt_signup']->execute();
    
}

function fetch_data($user_key)      // will return all the data
{

}