<?php

namespace App\Services;

use App\Helper\Captcha\CaptchaHelper;

class Captcha
{
    public static function make()
    {
        (new CaptchaHelper)->render();
    }
}
