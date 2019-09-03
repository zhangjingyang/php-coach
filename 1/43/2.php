<?php
//array_map() 函数将用户自定义函数作用到数组中的每个值上，并返回用户自定义函数作用后的带有新值的数组。

//回调函数接受的参数数目应该和传递给 array_map() 函数的数组数目一致。
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];


$mapUsers = array_map(function($player){
    // unset($player['age']);
    $player['club'] = '大连一方';
    return $player;
},$players);
print_r($mapUsers);
