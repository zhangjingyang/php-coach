<?php

namespace App\Services;

use App\Exceptions\ValidateException;
use App\Helper\DB;
use App\Helper\DBHelper;
use Exception;

class Register
{
    public static function make()
    {
        if (empty($_POST['username'])) {
            throw new Exception("用户名不能为空");
        }
        if ($_POST['password'] != $_POST['confirmPassword']) {
            throw new ValidateException("两次密码输入不一致");
        }

        $pdo = DBHelper::getInstance();
        $pdo->table('users')->insert(['name' => $_POST['username'], 'password' => md5($_POST['password'])]);
    }
}
