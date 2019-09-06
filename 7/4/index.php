<?php
namespace App;
include 'helper.php';
include 'tools.php';

class User{
    public static function make(){
        return __METHOD__;
    }
}

function show(){
    echo 'app show';
}

show();

echo PIE;
echo \Tool\SONIC;