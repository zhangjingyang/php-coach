<?php
class User{
    private $name;
    public function say(){
        return 'hello ' . $this->getName();
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
echo '<hr>';
$user = new User;
$user->setName('Sam');
echo $user->say();