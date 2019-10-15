<?php

namespace App\Services;

use App\Exceptions\ValidateException;

class Login
{
    public static function make()
    {
        if (empty($_POST['username'])) {
            throw new ValidateException();
        }
        $_SESSION['VALIDATE_ERROR_MESSAGE'] = "";
        View::make('success');
    }
}
