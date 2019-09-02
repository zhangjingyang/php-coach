<?php
echo true?'yes':'no';

$name = 'zhangsan';
echo $name?:'lisi';

//?? 变量必须存在并且变量的值不能为空
//一般用来处理数据库的null数据
$a = 0;
echo $name??'NO';
$b = null;
echo $b??'NO';
echo $c??'No';

//屏蔽警告错误 @
@(20/0);
