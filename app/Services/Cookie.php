<?php

namespace App\Services;

use App\Helper\DBHelper;

class Cookie
{
    public static function make($uid)
    {
        date_default_timezone_set('PRC');
        $cookieName = substr('SESS' . md5($_POST['username'] . mt_rand(0, 10000)), 0, 32);
        $cookieValue = md5($_POST['username'] . mt_rand(0, 10000) . microtime(true));
        setcookie($cookieName, $cookieValue, time() + 7200, '/', 'localhost');
        $pdo = DBHelper::getInstance();
        $pdo->table('session')->insert(['uid' => $uid, 'name' => $cookieName, 'value' => $cookieValue]);
    }
}
