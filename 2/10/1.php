<?php
//执行语句
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//字段名大小写

    $sth = $pdo->prepare("INSERT INTO USERS (name,age) VALUES (:name,:age)");//:id命名符
    $sth->execute([':name'=>'James',':age'=>34]);
} catch (PDOException $e) {
    die($e->getMessage());
}
