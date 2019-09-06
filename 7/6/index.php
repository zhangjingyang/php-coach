<?php
namespace App;
use App\Module\Shop\Controller\User;//定义类
use App\Module\Shop\Controller;//定义命名空间

include 'Module/Shop/Controller/User.php';

// Module\Shop\Controller\User::make();//写的太长了

User::make();
Controller\User::make();