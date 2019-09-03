<?php
/* serialize() 返回字符串，此字符串包含了表示 value 的字节流，可以存储于任何地方。

这有利于存储或传递 PHP 的值，同时不丢失其类型和结构。 */

$database = include 'config/database.php';
echo serialize($database);
$cache = serialize($database);
print_r(unserialize($cache));