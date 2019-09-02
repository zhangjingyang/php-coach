<?php
//操作关联数组
$user = [
    'name' => 'James',
    'age' => 34,
];
$user['name'] = 'Lebron James';
print_r($user);

$users = [
    ['name' => 'James', 'age' => 34],
    ['name' => 'Harden', 'age' => 29],
];
$users[0]['name'] = 'Lebron James';
print_r($users);
