<?php
header('Content-type:image/png');
$res=imagecreatetruecolor(500,500);
$red = imagecolorallocate($res,255,0,0);
$green = imagecolorallocate($res,0,255,0);
$blue = imagecolorallocate($res,0,0,255);
imagefill($res,0,0,$red);
imagerectangle($res,100,100,400,400,$blue);
imagefilledrectangle($res,200,200,300,300,$green);
imageellipse($res,250,250,200,200,$green);
imagefilledellipse($res,250,250,100,100,$blue);
imageline($res,0,0,500,500,$blue);
imagepng($res);