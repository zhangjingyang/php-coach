<?php
//md5函数吧一个字符串hash成一个32位的字符串
//以前用来加密密码,现在不用了，有加密库
echo md5('zhangsan');

//特殊的方式不方便变成文件名 缓存
$file = 'user1/info';
echo md5($file) . '.php';