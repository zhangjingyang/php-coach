<?php
include_once '../interface/FlyBehaviror.php';
class FlyWithWings implements FlyBehaviror
{
    public function fly()
    {
        echo 'fly';
    }
}
