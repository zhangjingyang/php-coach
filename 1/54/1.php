<?php
$dateTime1 = new DateTime();
$dateTime2 = new DateTime('2019-10-27 0:0:0');
$interval = $dateTime1->diff($dateTime2);
echo $interval->format('%m个月%d天,共%a天');