<?php
include_once 'Duck.php';
include_once 'FlyNoWay.php';

class ToyDuck extends Duck
{
    public function __construct()
    {
        $this->flybehaviror = new FlyNoWay();
    }

    public function display()
    {
        echo "this is a toy duck";
    }
}
