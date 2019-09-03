<?php
$str = '1@2@3';
preg_match('/\d+/',$str,$matches);//匹配第一个
print_r($matches);

preg_match_all('/\d/',$str,$matches);//匹配所有
print_r($matches);

$arr = preg_split('/@|#/',$str);//拆分
print_r($arr);

echo preg_replace_callback('/\d+/',function($matches){
    if($matches[0]>2){
        return $matches[0] +200;
    }
    return $matches[0];
},$str);
