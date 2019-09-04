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
/*     PDO::FETCH_ASSOC：返回一个索引为结果集列名的数组
    PDO::FETCH_BOTH（默认）：返回一个索引为结果集列名和以0开始的列号的数组
    PDO::FETCH_NUM：返回一个索引为以0开始的结果集列号的数组
    PDO::FETCH_OBJ：返回一个属性名对应结果集列名的匿名对象 */
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//字段名大小写
    $query = $pdo->query("select * from users");
    $rows = $query->fetchAll();
    // print_r($rows);
    $json_data = json_encode($rows);
    print_r($json_data);
} catch (PDOException $e) {
    die($e->getMessage());
}
