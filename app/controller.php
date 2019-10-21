<?php
include 'bootstrap.php';

use App\Services\Login;
use App\Services\Register;
use App\Services\Captcha;

$action = $_GET['action'];

// var_dump($_SERVER['REQUEST_URI']);
// var_dump(explode('/',$_SERVER['REQUEST_URI']));
// die();
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
    default:
        View::make('index');
}
