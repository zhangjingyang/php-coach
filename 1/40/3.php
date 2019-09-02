<?php
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];
foreach ($players as $player) {
    print_r($player);
}

foreach ($players as $key => $value) {
    echo $key . '=>' . $value['name'];
}
//练习：如何通过foreach批量修改值呢？ 每个人加10岁
