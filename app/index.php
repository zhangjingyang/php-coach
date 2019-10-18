<?php
include 'bootstrap.php';

use App\Services\View;
use App\Helper\DBHelper;

$result = [];
foreach ($_COOKIE as $key => $value) {
    if ('SESS' == substr($key, 0, 4)) {
        $cookieName = $key;
        $cookieValue = $value;
        $pdo = DBHelper::getInstance();
        $result = $pdo->table('session')->where('name = ?')->get([$cookieName]);
        break;
    }
}

if (count($result) == 1) {
    if ($result[0]['value'] == $cookieValue) {
        View::make('success');
    }
} else {
    View::make('index');
}
