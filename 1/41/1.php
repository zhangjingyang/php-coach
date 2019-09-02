<?php
//数组可以从前面压进去，也可从后面压进去，老数据也是一样

$users = ['Jim', 'Kate'];
count($users); //计算数组元素数量

array_push($users, 'Lucy'); //从后压进去；
print_r($users);

$user = array_pop($users); //从后面弹出去
print_r($users);

array_unshift($users, 'David'); //从前面压进去
print_r($users);

array_shift($users); //从前面移除
print_r($users);

count($users);
