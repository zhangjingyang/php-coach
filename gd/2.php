<?php
header('Content-type:image/png');
$res = imagecreatetruecolor(400,200);
$white = imagecolorallocate($res,255,255,255);
imagefill($res,0,0,$white);
for($i=0;$i<10000;$i++){
    imagesetpixel($res,mt_rand(0,400),mt_rand(0,200),imagecolorallocate($res,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)));
}
for($i=0;$i<10;$i++){
    imageline($res,mt_rand(0,400),mt_rand(0,200),mt_rand(0,400),mt_rand(0,200),imagecolorallocate($res,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)));
}
imagepng($res,'1.png');
imagepng($res);
imagedestroy($res);