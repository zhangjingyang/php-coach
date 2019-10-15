<?php

namespace App\Services;

use App\Exceptions\ViewException;

class View
{
    public static function make(string $fileName, array $vars = [])
    {
        $file = "Views/" . $fileName . ".tpl.php";
        if (!\is_file($file)) {
            throw new ViewException("{$file}页面不存在");
        }
        include $file;
    }
}
