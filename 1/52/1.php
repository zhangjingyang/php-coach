<?php
//字符串转日期 很常见 日期插件
echo strtotime('2018-08-08');
echo '<hr>';
echo date('Y-m-d H:i:s',1533686400);
echo '<hr>';
echo strtotime('now');//获取当前时间戳
echo '<hr>';
echo strtotime('+1 year');//加1年 主要是培养看手册的习惯
echo '<hr>';
echo strtotime('next friday');//加1年 主要是培养看手册的习惯