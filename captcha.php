<?php
$str = md5(microtime());;
$str = substr($str,0,4);

session_start();
$_SESSION['captcha_code'] = $str;

$img = imagecreate(50,20);

imagecolorallocate($img,255,255,255);
$txtcol = imagecolorallocate($img,255,0,0);
imagestring($img,20,5,5,$str,$txtcol);
header('Content:image/jpeg');
imagejpeg($img);
?>