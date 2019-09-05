<?php
class Model{
    private $id;
    private $name;

    public function __get($name){
        return $this->$name;
    }

    public function __set($name,$value){
        $this->$name = $value;
    }
}

$model = new Model;
$model->id = 1;
echo $model->id;