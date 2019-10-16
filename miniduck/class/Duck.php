<?php
abstract class Duck
{
    protected $flybehaviror;

    // public function __construct($flybehaviror = null)
    // {
    //     $this->flybehaviror = $flybehaviror;
    // }

    public function performFly()
    {
        $this->flybehaviror->fly();
    }

    public abstract function display();

    public function swim()
    {
        echo 'every duck can swim';
    }
}
