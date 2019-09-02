<?php
//两种写法
//数组下标从0开始
$arr1 = array(1,2,3);

$arr2 = [1,2,3,4];
//索引数组0，1，2，3 默认

//关联数组 key为字符串的数组
$player = [
    'name' => 'Messi',
    'age' => '32',
    'position' => 'SS'
];
echo $player['name'];
//多维数组
$players = [
    ['name' => 'Messi',
    'age' => '32',
    'position' => 'SS'],
    ['name' => 'CR',
    'age' => '34',
    'position' => 'LWF']
];
echo $player[1]['name'];