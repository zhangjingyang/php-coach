<?php
class User{
    protected $name;
    protected static $group = 'visitor';
    public function say(){
        return self::$group . 'hello ' . $this->getName();
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

$obj = new User;
$obj->setName('world');
echo $obj->say();
