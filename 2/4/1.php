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
    $pdo->exec("INSERT INTO users (name,age) VALUES ('Dan',10)");
    echo $pdo->lastInsertId(); //获取自增主键
    // $pdo->exec("UPDATE users SET name='Sam' WHERE age > 10");
    // echo $pdo->exec("DELETE FROM users where age <20");
} catch (PDOException $e) {
    die($e->getMessage());
}
