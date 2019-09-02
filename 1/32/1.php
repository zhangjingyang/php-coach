<?php
//展示函数的灵活性，复用性
function mobile($tel){
    return substr($tel,0,-4).'****';
}

echo mobile('13998674839');