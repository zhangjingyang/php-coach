<?php
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    // $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo = new PDO($dsn, $config['user'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//另一种设置属性方式
    $pdo->query('asdfasd');
} catch (PDOException $e) {
    die("Exception:" . $e->getMessage());
}
