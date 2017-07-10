<?php


function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}


function redirect($path)
{
    header("Location: /{$path}");
}

    /**
     * @return bool
     */
    function loginStatus()
{
    return PHP_SESSION_ACTIVE === session_status () && isset($_SESSION['my_data']['username']);
}


