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

    public function __call($name,$arg){
        $action = 'getAttribute' . ucfirst($name);
        if(method_exists($this,$action)){
            return call_user_func_array([$this,$action],$arg);
        }
    }

    public function getAttributePhone(){
        echo 'phone';
    }
}



$model = new Model;
$model->phone();