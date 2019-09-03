<?php
$database = include 'config/database.php';
// print_r($database);
// var_export($database);

$config = var_export($database,true);
file_put_contents('database.php','<?php return ' . $config . ';');