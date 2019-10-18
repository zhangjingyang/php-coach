<?php
include 'bootstrap.php';

use App\Services\Login;
use App\Services\Register;
use App\Services\Captcha;

$action = $_GET['action'];

switch ($action) {
    case 'login':
        Login::make();
        break;
    case 'register':
        Register::make();
        break;
    case 'captcha':
        Captcha::make();
        break;
}
