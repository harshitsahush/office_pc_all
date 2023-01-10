<?php
//to check whether the page url is equal to a pre-defined url
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