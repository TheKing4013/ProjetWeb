<?php
function init_session()
{
    if (!session_id()) {
        session_start();
        session_regenerate_id();
        return true;
    }
    return false;
}

function clear_session()
{
    session_destroy();
    session_unset();
    session_destroy();
}

function is_logged()
{
    if (isset($_SESSION['user_name']))
        return true;
    return false;
}

function str_random($length){
    $chars = "0123456789AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn$^ù%";
    return substr(str_shuffle(str_repeat($chars, $length)), 60,$length);
}