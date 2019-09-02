<?php
//函数参数的默认值
function mobile($tel,$num=4,$fix='****'){
    return substr($tel,0,-1*$num).$fix;
}

echo mobile('13998674839');
echo '<hr>';
echo mobile('13998674839',3,'###');