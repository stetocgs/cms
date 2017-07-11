<?php


function html_view($name, $data = [])
{
    require($_SERVER['DOCUMENT_ROOT']."/public/html/{$name}.view.php");
}

function view($name, $data = [])
{
//    extract($data);

//    require('app/views/')
//    return require "app/views/{$name}.view.php";
//    return require("/public/html/{$name}.view.php");
    return html_view($name, $data);
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


