<?php

namespace App\Exceptions;

use Exception;
use App\Services\View;

class ViewException extends Exception
{
    public function render()
    {
        View::make('error', ['message' => $this->getMessage()]);
    }
}
