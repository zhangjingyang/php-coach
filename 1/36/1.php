<?php
function sum(int ...$nums):int{
    return array_sum($nums);
}

$callback = 'sum';

echo $callback(1,2,3,4);

//判断函数是否存在
function_exists('sum');