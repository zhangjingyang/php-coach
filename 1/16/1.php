<?php
// $str = "<h1 style=\"color:red\">hello</h1>";
// echo $str;


//前面是什么字符串兽面是什么字符串，前后不能有空格
$str = <<<php
<h1 style="color:red">hello</h1>
php;

echo $str;