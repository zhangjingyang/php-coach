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
}

class Goblin extends Monsters
{
    public function beat()
    {
        echo $this->shout();
        echo ' attack value is ' . $this->attack;
    }
}

(new Goblin)->beat();
