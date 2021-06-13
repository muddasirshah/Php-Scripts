<?php
$str = md5(microtime());; //uses the md5 cipher, any algorithm can be used here. 
$str = substr($str,0,4); // reducing the length of cipher, selecting first 4 characters from the hash

session_start(); //starting a php session
$_SESSION['captcha_code'] = $str; // getting this code in php session for server validations

$img = imagecreate(50,20); // creating an image with width of 50 pixels and height of 20 pixels

imagecolorallocate($img,255,255,255); // creating an rgb image 256 bit
$txtcol = imagecolorallocate($img,255,0,0); // text color of image as RGB(255,0,0) where Red = 255 Max
imagestring($img,20,5,5,$str,$txtcol); // text to display in the image
header('Content:image/jpeg'); // using php header for displaying / dumping the image
imagejpeg($img); // output image directed to $img variable above ^
?>
