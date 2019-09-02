<?php
//严格模式下必须要类型一样，数字字符串也不可以
// declare(strict_types = 1);
function show(int $num){
    return $num;
}

// var_dump(show('a'));//报错

var_dump(show('1'));//非严格模式可以

// function sum(int ...$nums){
//     return array_sum($nums);
// }

