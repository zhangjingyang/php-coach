<?php

namespace App\Exceptions;

use Exception;

class ValidateException extends Exception
{
    public function render()
    {
<<<<<<< HEAD
        $_SESSION['ERROR_MESSAGE'] = $this->getMessage();
=======
        $_SESSION['ERROR_MESSAGE'] = '登录失败';
>>>>>>> 57c5adbbc200f92b13cb2ac12530ea9ed2b40d83
        header('Location:index.php');
    }
}
