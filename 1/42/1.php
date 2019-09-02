<?php
//检测数组键名是否存在
$allowImageType = ['jpeg' => 2000000, 'jpg' => 2000000, 'png' => 2000000];
$file = 'test.gif';
$ext = strtolower(substr(strrchr($file, '.'), 1));

if (!array_key_exists($ext, $allowImageType)) {
    echo 'wrong';
} else {
    echo 'success';
}
