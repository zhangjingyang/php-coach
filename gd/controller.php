<?php
include 'Captcha.php';
session_start();
$captcha = new Captcha();
$code = $captcha->render();
$_SESSION['captcha'] = $code;