<?php

namespace App\Captcha;

class Captcha
{
    const lines_num = 5;

    private $width;
    private $height;
    private $length;
    private $canvas;

    public function __construct(int $width = 100, int $height = 50, int $length = 4)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }

    public function render()
    {
        $this->canvas = imagecreatetruecolor($this->width, $this->height);
        imagefill($this->canvas, 0, 0, $this->getBgColor());
        $this->drawLetters();
        $this->drawLines();
        $this->drawPixels();
        header('Content-type:image/png');
        imagepng($this->canvas);
    }

    private function drawLetters()
    {
        $size = 20;
        $font = realpath('arial.ttf');
        $data = 'abcdefghigkmnpqrstuvwxy3456789ABCDEFGHJKLMNPQRSTUVWXYZ';
        for ($i = 0; $i < $this->length; $i++) {
            $angle = mt_rand(-20, 20);
            $box = imagettfbbox($size, $angle, $font, 'A');
            $x = ($this->width / $this->length) * $i + 5;
            $y = $this->height / 2 + ($box[1] - $box[7]) / 2;
            imagettftext($this->canvas, $size, $angle, $x, $y, $this->getTextColor(), $font, $data[mt_rand(0, strlen($data) - 1)]);
        }
    }

    private function drawLines()
    {
        for ($i = 0; $i < self::lines_num; $i++) {
            imageline($this->canvas, mt_rand(0, $this->width), mt_rand(0, $this->height), mt_rand(0, $this->width), mt_rand(0, $this->height), $this->getRandomColor());
        }
    }

    private function drawPixels()
    {
        $num = $this->width * $this->height / 20;
        for ($i = 0; $i < $num; $i++) {
            imagesetpixel($this->canvas, mt_rand(0, $this->width), mt_rand(0, $this->height), $this->getRandomColor());
        }
    }

    private function getBgColor()
    {
        return imagecolorallocate($this->canvas, 255, 255, 255);
    }

    private function getRandomColor()
    {
        return imagecolorallocate($this->canvas, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    }

    private function getTextColor()
    {
        return imagecolorallocate($this->canvas, mt_rand(0, 125), mt_rand(0, 125), mt_rand(0, 125));
    }
}
