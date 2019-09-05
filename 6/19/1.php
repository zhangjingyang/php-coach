<?php
class Capcha{
    protected $width;
    protected $height;
    protected $len;
    public function __construct(int $width = 500, int $height = 100,int $len = 5){
        $this->width = $width;
        $this->height = $height;
        $this->len = $len;
    }

    public function show(){
        echo "width = {$this->width}, height = {$this->height} ";
    }

    public function __destruct(){
        echo __METHOD__;
    }
}

$code = new Capcha(300);
$code->show();
