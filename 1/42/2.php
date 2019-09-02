<?php
$allowImageType = ['jpeg', 'jpg', 'png'];
$file = 'test.gif';
$ext = strtolower(substr(strrchr($file, '.'), 1));

if (in_array($ext, $allowImageType)) {
    echo 'success';
} else {
    echo 'wrong';
}
