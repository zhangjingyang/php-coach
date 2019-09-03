<?php
// array_change_key_case() 将 array 数组中的所有键名改为全小写或大写。本函数不改变数字索引。
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
