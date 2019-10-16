<?php

namespace App\Exceptions;

use Exception;

class ValidateException extends Exception
{
    public function render()
    {
        $_SESSION['ERROR_MESSAGE'] = '登录失败';
        header('Location:index.php');
    }
}
