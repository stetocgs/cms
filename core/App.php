<?php

namespace App\Core;

class App
{

    protected static $registry = [];

    public static function bind ($key, $value)
    {
        static::$registry[ $key ] = $value;
    }

    public static function get ($key)
    {
        if (!array_key_exists ( $key, static::$registry )) {
            throw new Exception( "No {$key} is bound in the container." );
        }

        return static::$registry[ $key ];
    }

    public static function getSessionHandler ()
    {
        if (PHP_SESSION_ACTIVE === session_status ())
            return $_SESSION[ static::$registry[ 'config' ][ 'session' ][ 'storage_name' ] ] ?? null;

        return null;
    }

    public static function setSessionHandler ($handler)
    {
        $_SESSION[ static::$registry[ 'config' ][ 'session' ][ 'storage_name' ] ] = $handler;
    }

    public static function isLogged()
    {
        $session = self::getSessionHandler ();
        return $session === null ? false : $session->isLogged();
    }

    public static function isAdmin ()
    {
        return self::isLogged() && self::getSessionHandler ()->isAdmin();
    }
}
