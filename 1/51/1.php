<?php
date_default_timezone_set('PRC');
echo date('Y-m-d h:i:s');//此处查看文档学习
echo date('Y-m-d h:i:s',time()-3600);//一小时之前的时间

print_r(getdate());//返回时间相关的数组