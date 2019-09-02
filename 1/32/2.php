<?php
//变量作用域，函数参数传递方式
function show($var){
    $var++;
    echo $var;
}

function show(&$var){
    $var++;
    echo $var;
}
$var = 1;
show($var);
echo '<hr>';
echo $var;