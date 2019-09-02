<?php
//常量不受访问限制
const NAME = 'zhangsan';

function show(){
    echo NAME;
}
show();
echo '<hr>';
//检测一个常量是否被定义过
var_dump(defined('NAME'));
echo '<hr>';
//系统常量
echo PHP_OS;
echo '<hr>';
//查看所有常量
print_r(get_defined_constants());