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
        $result = $pdo->table('users')->where("name = ? and password = ?")->get([$_POST['username'],md5($_POST['password'])]);
        // var_dump($result);
        $_SESSION['ERROR_MESSAGE'] = "";
        if(count($result) == 1){
            View::make('success');
        }else{
            throw new ValidateException("用户名密码错误");
        }
        
    }
}
