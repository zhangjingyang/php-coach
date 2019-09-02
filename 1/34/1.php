<?php
function sum(int ...$nums):int{
    return array_sum($nums);
}

echo sum(1,2,3,4,5);

//可以返回空或者指定类型数据
function show():?string{
    return null;
}

show();