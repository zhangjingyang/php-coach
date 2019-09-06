<?php
namespace App;
include 'helper.php';

\App\Controller\Helper\Helper::make();//这是正常的一种写法
//通过namespace写法
namespace \Controller\Helper\Helper::make();
//通过__NAMESPACE__变量写
$clazz = __NAMESPACE__.'\\Controller\Helper\Helper';
// echo $clazz;
$clazz::make();