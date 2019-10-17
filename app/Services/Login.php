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
        $result = $pdo->table('users')->where("name = {$_POST['username']}")->get();

        $_SESSION['VALIDATE_ERROR_MESSAGE'] = "";
        View::make('success');
    }
}
