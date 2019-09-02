<?php
//打散
print_r(explode('.','www.ibm.com'));
//合并
$arr = ['email','zhangjy@cn.ibm.com'];
echo implode(':',$arr);
//截断
$course = 'php:string function';
echo substr($course,3);
echo substr($course,0,4);

$str = "php教程:字符串函数";
echo mb_substr($str,6,null,'utf-8');