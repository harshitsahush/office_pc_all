<?php

    $GLOBALS['stmt'] = $GLOBALS['conn']->prepare("INSERT INTO posts (firstname, lastname, email) VALUES (?,?,?)");
    $GLOBALS['stmt']->bind_param("sss", $GLOBALS['fname'], $GLOBALS['lname'], $GLOBALS['email']);
