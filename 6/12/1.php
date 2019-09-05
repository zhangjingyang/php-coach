<?php
class Monsters
{
    protected $hp = 100;
    protected $mp = 100;
    protected $attack = 5;
    protected $defence = 2;

    public function shout()
    {
        return 'Lok Tar!';
    }

    public function magic()
    {
        echo 'fireball';
    }

    public function die(){
        $this->knock_down();
        $this->disappear();
    }

    public function knock_down(){
        echo 'knock down ';
    }

    public function disappear(){
        echo 'disappear';
    }
}

class Goblin extends Monsters
{
    protected $attack = 4;
    public function beat()
    {
        echo $this->shout();
        echo ' attack value is ' . $this->attack;
    }

    public function magic()
    {
        echo 'throw lance';
    }

    public function die(){
        echo 'time is money. ';
        parent::die();
    }
}

(new Goblin)->die();
