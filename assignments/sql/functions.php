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

function insert_into_table($firstname, $lastname, $e_mail)
{
    $GLOBALS['fname'] = $firstname;
    $GLOBALS['lname'] = $lastname;
    $GLOBALS['email'] = $e_mail;

    $GLOBALS['stmt']->execute();
}