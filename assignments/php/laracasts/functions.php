<?php

function checkURL($url)
{
    if($url == $_SERVER['REQUEST_URI'])
    {
        return true;
    }
    else
    {
        return false;
    }
}