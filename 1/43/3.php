<?php
//array_values() 返回 input 数组中所有的值并给其建立数字索引。
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];
$stringPlayers = array_map(function($player){
    return implode('-',array_values($player));
},$players);

print_r($stringPlayers);