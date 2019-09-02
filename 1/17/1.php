<?php
//查询函数库文档

$str = "hello world";
echo strlen($str);
echo '<hr>';
$str = "hello world   ";
echo strlen($str);
echo '<hr>';
//默认删除空格
echo strlen(trim($str));
echo '<hr>';
//去除首尾
echo trim($str," dl");

//ltrim,rtrim

echo strtolower('AbCdEfG');
echo '<hr>';
echo strtoupper('AbCdEfG');
echo '<hr>';
echo ucfirst('word');
echo '<hr>';
echo ucwords('hello world');
echo '<hr>';
echo ucwords('hello|world','|');