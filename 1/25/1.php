<?php
$day = 'monday';

switch($day){
    case 'monday':
        echo '星期一';
        break;
    case 'tuesday':
        echo '星期二';
        break;
    case 'wensday':
        echo '星期三';
        break;
}

switch($day){
    case 'monday':
    case 'tuesday':
    case 'wensday':
        echo '工作日';
        break;
    default:
        echo '周末';
}

// $age = 15;
// switch($age){
//     case $age < 12;
//         echo '儿童';
// }

//其他写法
// switch($status):
//     case:
//     default:
// endswitch;