<?php

session_start();

header("Expires: Tue, 01 Jan 2013 00:00:00 GMT");
header("Last-modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-checked=0", false);
header("Pragma: no-cache");

$chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = '';

for ( $i = 0; $i < 6; $i++ ) {
    $randomString .= $chars[rand( 0, strlen($chars)-1 )];
}

$_SESSION['captcha'] = strtolower();

/*Create and insert captcha background here
 $im = @imagecreatefrompng( "" ); */

imagettftext($im, 30, 0, 10, 38, imagecolorallocate ($im, 0, 0, 0), 'larabiefont.tff', $randomString);

/* test rand(); for weights */

header( "Content-type: image/png");
imagepng($im, NULL, 0);
imagedestroy($im);
