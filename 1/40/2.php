<?php
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];

while (list('name' => $name, 'age' => $age) = current($players)) {
    echo "Player name is {$name}, age:{$age}. <br>";
    next($players);
}
