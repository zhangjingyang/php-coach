<?php
//防止乱码
header('Content-type:text/html;charset=utf-8');
//单双引号的区别,为什么要加花括号
$name = 'zhangsan';

$str = "my name is {$name}hello";

echo $str;