<?php
//php时间日期类
//DateTime DateInterval DateTimezone
$timezone = new DateTimeZone('PRC');
$dateTime = new DateTime();
//$dateTime = new DateTime(‘2018-08-08’);
// $dateTime->setDate();
// DateTime::createFromFormat('Y/m/d','2018/08/08');
$dateTime->setTimezone($timezone);
echo $dateTime->format('Y-m-d H:i:s');//ISO格式
echo $dateTime->format('U');//unix时间戳

