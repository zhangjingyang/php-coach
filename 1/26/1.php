<?php
//跳出条件break continue return
$a = 10;
while($a--){
    echo $a;
    return 0;
}
$num = 10;
while($num){
    $num--;
    if($num == 5){
        break;
    }
}


$num = 10;
do{
    $num--;
}while($num > 0);

