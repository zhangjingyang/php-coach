<?php
$string = 'soowiekdjs';
echo strlen($string);
echo '<hr>';
//中文一个字多于一个长度，使用mb库
echo strlen('大家好');
echo mb_strlen('大家好','utf8');