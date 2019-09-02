<?php
//== 类型不同会进行类型转换
$a = 1;
$b = 2;
$c = false;
$d = 0;
var_dump($a == $b);
echo '<hr>';
//=== !==三个等号类型也要一样，不转换类型
var_dump($c == $d);
echo '<hr>';
var_dump($c === $d);
echo '<hr>';
//>= <= != <> > < 

//逻辑运算
//&& || ! 优先级高
var_dump(true && true);
echo '<hr>';
var_dump(true || false);
echo '<hr>';
var_dump(!ture);
//and or优先级低 xor异或