<?php

class DBUtil
{
    private static $_instance = null;
    private $dsn;
    private $dbh;

    private function __construct()
    {
        $dsn = "mysql:host";
    }

    private function __clone()
    { }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}
