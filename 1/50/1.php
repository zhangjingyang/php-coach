<?php
//时间戳，从1970年1月1日 0：0：0到现在的秒数
date_default_timezone_set('PRC');
echo time();
echo '<hr>';
echo microtime();//返回微秒
echo '<hr>';
echo microtime(true);//返回浮点数，可以用来计算程序执行时间