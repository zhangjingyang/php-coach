<?php

namespace App\Services;

use App\Exceptions\ValidateException;
use App\Helper\DB;
use App\Helper\DBHelper;
use App\Services\Cookie;

class Login
{
    public static function make()
    {
        if (empty($_POST['username'])) {
            throw new ValidateException("用户名不能为空");
        }
        $pdo = DBHelper::getInstance();
        $result = $pdo->table('users')->where("name = ? and password = ?")->get([$_POST['username'], md5($_POST['password'])]);
        $_SESSION['ERROR_MESSAGE'] = "";
        if (count($result) == 1) {
            Cookie::make($result[0]['uid']);
            View::make('success');
        } else {
            throw new ValidateException("用户名密码错误");
        }
    }
}
