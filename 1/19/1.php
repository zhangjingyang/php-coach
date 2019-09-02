<?php
//常量规范大写
//函数 灵活性好
define('DB_HOST','localhost',true);
// define('DB_HOST','127.0.0.1');
define('DATA',[1,2,3]);
//类的常量必须用const 执行效率高
const DB_USER = 'root';
echo DB_USER;