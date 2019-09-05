<?php
namespace App;

include 'Order.php';
include 'Comment.php';
class User
{
    public static function make()
    {
        return __METHOD__;
    }
}
//非限定
echo User::make(); //在同一个命名空间下面，所以可以直接使用
// echo Order::make(); //报错，
//这种叫限定命名空间
echo Controller\Order::make(); //相对于APP
//全限定命名空间
echo \Common\Comment::make();
