<?php
//时区PRC Asia/chongqing Asia/shanghai Asia/urumqi
//可以通过修改php.ini的timezone，但是不够灵活，不建议使用
date_default_timezone_set('PRC');//设置时区
echo date_default_timezone_get();//查看时区
echo date('Y-m-d h:i:s');