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

    //    function loginStatus()
    //{
    //    return PHP_SESSION_ACTIVE === session_status () &&
    //           App::get('database')->rowExists($_SESSION['my_data']['username'] ?? '',
    //               $_SESSION['my_data']['session_hash'] ?? '');
    //}


