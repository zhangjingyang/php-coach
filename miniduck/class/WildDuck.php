<?php
include_once 'Duck.php';
include_once 'FlyWithWings.php';

class WildDuck extends Duck
{
    public function __construct()
    {
        // parent::__construct(new FlyWithWings());
        $this->flybehaviror = new FlyWithWings();
    }

    public function display()
    {
        echo "this is a wild duck";
    }
}
