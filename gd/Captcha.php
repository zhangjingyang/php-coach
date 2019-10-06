<?php
class Captcha{
    private $canvas;
    private $width;
    private $height;
    private $length;
    private $code;

    public function __construct(int $width=100,int $height=50,int $length=4)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }

    public function render(){
        $this->canvas = imagecreatetruecolor($this->width,$this->height);
        imagefill($this->canvas,0,0,$this->getBgColor());
        $this->addLines(5);
        $this->addPixels($this->width*$this->height/10);
        $this->addCode();
        header('Content-type:image/png');
        imagepng($this->canvas);
        return $this->code;
    }

    private function addLines($num){
        for($i = 0;$i < $num;$i++){
            imageline($this->canvas,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor());
        }
    }

    private function addPixels($num){
        for($i = 0;$i < $num;$i++){
            imagesetpixel($this->canvas,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor());
        }
    }

    private function addCode(){
        $size = 20;
        $font = realpath('msyh.ttc');
        $data = 'abcdefghigkmnpqrstuvwxy3456789ABCDEFGHJKLMNPQRSTUVWXYZ';
        for($i = 0;$i < $this->length;$i++){
            $angle = mt_rand(-20,20);
            $box = imagettfbbox($size,$angle,$font,'A');
            $x = ($this->width/$this->length)*$i;
            $y = $this->height/2 + ($box[1] - $box[7])/2 + mt_rand(-10,10);
            $letter = $data[mt_rand(0,strlen($data)-1)];
            $this->code .= $letter;
            imagettftext($this->canvas,$size,$angle,$x,$y,$this->getCodeColor(),$font,$letter);
        }
    }

    private function getBgColor(){
        return imagecolorallocate($this->canvas,255,255,255);
    }

    private function getColor(){
        return imagecolorallocate($this->canvas,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
    }

    private function getCodeColor(){
        return imagecolorallocate($this->canvas,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
    }
}