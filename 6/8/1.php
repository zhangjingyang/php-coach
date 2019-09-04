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
}

(new Goblin)->magic();
