<?php
namespace Module\Shop\Controller;

use Module\Shop\Server\User as UserServer;
class User{
    public static function make(){
        UserServer::make();
    }
}