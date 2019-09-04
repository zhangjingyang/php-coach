<?php
class User{
    private $name;
    public function say(){
        return 'hello ' . $this->name;
    }
    public function setName(string $name){
        $this->name = $name;
    }
}

$obj = new User;
// var_dump($obj);
$obj->setName('world');
echo $obj->say();