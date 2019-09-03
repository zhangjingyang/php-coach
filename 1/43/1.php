<?php
//array_filter();
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];

$filterPlayers = array_filter($players,function($player){
    return $player['age'] >= 30;
});

print_r($filterPlayers);