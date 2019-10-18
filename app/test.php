<?php
include 'bootstrap.php';
header('Content-type: image/jpeg');

use Gregwar\Captcha\CaptchaBuilder;


$builder = new CaptchaBuilder;
$builder->output();
