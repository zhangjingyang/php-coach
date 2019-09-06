<?php
class BootStrap{
    public static function boot(){
        spl_autoload_register([new self,'autoload']);
    }
    public function autoload(String $class){
        $file = str_replace('\\','/',$class).'.php';
        include $file;
    }
}

BootStrap::boot();