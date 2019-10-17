<?php

namespace App\Exceptions;

use Exception;

class ValidateException extends Exception
{
    public function render()
    {
        $_SESSION['ERROR_MESSAGE'] = $this->getMessage();
        header('Location:index.php');
    }
}
