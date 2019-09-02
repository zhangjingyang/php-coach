<?php
$day = 'monday';
if($day == 'monday'){
    echo '饺子';
} elseif($day == 'thuesday'){
    echo '米线';
}else{
    echo '套餐';
}

//第二种写法
$status = false;
if($status):
echo 11;
else:
echo 22;
endif;