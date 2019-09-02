<?php
function sum(int ...$nums):int{
    static $result = 0;
    return $result += array_sum($nums);
}

echo sum(1,2,3,4);