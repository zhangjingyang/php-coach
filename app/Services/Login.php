<?php

namespace App\Services;

use App\Exceptions\ValidateException;
use App\Services\DB;

class Login
{
    public static function make()
    {
        if (empty($_POST['username'])) {
            throw new ValidateException("用户名不能为空");
        }
        $pdo = DB::getInstance();
        $result = $pdo->table('users')->where("name = ?")->get([$_POST['username']]);
        var_dump($result);
        $_SESSION['ERROR_MESSAGE'] = "";
        View::make('success');
    }
}
