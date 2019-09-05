<?php
session_start();
$_SESSION['name'] = 'Mike';
var_dump($_SESSION);
unset($_SESSION['name']);
$_SESSION = [];
session_destroy();//删除session文件