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
<<<<<<< HEAD
        $result = $pdo->table('users')->where("name = {$_POST['username']}")->get();
=======
        $result = $pdo->table('users')->get();
        var_dump($result);
>>>>>>> 57c5adbbc200f92b13cb2ac12530ea9ed2b40d83

        $_SESSION['VALIDATE_ERROR_MESSAGE'] = "";
        View::make('success');
    }
}
