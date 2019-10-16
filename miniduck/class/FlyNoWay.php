<?php
include_once '../interface/FlyBehaviror.php';

class FlyNoWay implements FlyBehaviror
{
    public function fly()
    {
        echo "can't fly";
    }
}
