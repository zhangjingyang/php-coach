<?php
//索引数组添加元素
$arr = ['Sam'];
$arr[1] = 'David';
$arr[5] = 'Mike';
$arr[5] = 'Joe';
print_r($arr);

//编号其实不用写，自增长的
$arr[] = 'Jim';
print_r($arr);
