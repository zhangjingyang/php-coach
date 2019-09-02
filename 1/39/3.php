<?php
//指针
$arr = ['James', 'Paul'];

echo key($arr); //当前key
echo '<hr>';
echo current($arr); //当前value
next($arr); //指针指向下一个元素，并返回下一个元素的值
echo '<hr>';
echo current($arr); //当前value
prev($arr);
echo current($arr); //指针指向上一个元素，并返回上一个元素的值
var_dump(prev($arr)); //上面没有元素会返回false
