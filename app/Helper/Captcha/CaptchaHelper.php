<?php

namespace App\Helper\Captcha;

class CaptchaHelper
{
    private $width;
    private $height;
    private $length;
    private $canvas;
    private $data = 'abcdefghigkmnpqrstuvwxy3456789ABCDEFGHJKLMNPQRSTUVWXYZ';

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
        $this->drawLines(5);
        $this->drawPixels();
        $this->drawCodes();
        header('Content-type:image/png');
        imagepng($this->canvas);
    }

    private function getBgColor()
    {
        return imagecolorallocate($this->canvas, 255, 255, 255);
    }

    private function getFontColor()
    {
        return imagecolorallocate($this->canvas, mt_rand(0, 125), mt_rand(0, 125), mt_rand(0, 125));
    }

    private function drawLines($lineNum)
    {
        for ($i = 0; $i < $lineNum; $i++) {
            imageline(
                $this->canvas,
                mt_rand(0, $this->getRandomX()),
                mt_rand(0, $this->getRandomY()),
                mt_rand(0, $this->getRandomX()),
                mt_rand(0, $this->getRandomY()),
                $this->getRandomColor()
            );
            imagesetthickness($this->canvas, mt_rand(0, 5));
        }
    }

    private function drawPixels()
    {
        $pixelNum = $this->width * $this->height / 20;
        for ($i = 0; $i < $pixelNum; $i++) {
            imagesetpixel($this->canvas, $this->getRandomX(), $this->getRandomY(), $this->getRandomColor());
        }
    }

    private function drawCodes()
    {
        $font = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'msyh.ttc');
        $size = 16;
        for ($i = 0; $i < $this->length; $i++) {
            $angle = mt_rand(-30, 30);
            $box = imagettfbbox($size, $angle, $font, 'A');
            $x = $i * $this->width / $this->length + mt_rand(5, 10);
            $y = ($this->height - ($box[7] - $box[1])) / 2;
            imagettftext($this->canvas, $size, $angle, $x, $y, $this->getFontColor(), $font, $this->getRandomCode());
        }
    }

    private function getRandomColor()
    {
        return imagecolorallocate($this->canvas, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    }

    private function getRandomX()
    {
        return mt_rand(0, $this->width);
    }

    private function getRandomY()
    {
        return mt_rand(0, $this->height);
    }

    private function getRandomCode()
    {
        return $this->data[mt_rand(0, strlen($this->data) - 1)];
    }
}
