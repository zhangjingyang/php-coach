<?php
//点语法
function sum(...$vars){
    print_r($vars);
    //array_sum($vars);
}
sum(1,2,3,4,5,6);