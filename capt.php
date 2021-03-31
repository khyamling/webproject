

<?php
session_start();
$code=rand(1000,9999);
$possible = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
$code1=substr((str_shuffle($possible)),0,2);
$code2=substr((str_shuffle($code)),0,2);
$code3=substr((str_shuffle($code)),2,2);
$code=$code2.$code1.$code3;

$_SESSION["code"]=$code;
error_reporting(E_ALL);
ini_set('display_errors', 1);


$im = imagecreate(100, 100) or die("Cannot Initialize new GD image stream");

$im = imagecreatetruecolor(65, 24);
$bg = imagecolorallocate($im, 22, 86, 165); //background color blue
$fg = imagecolorallocate($im, 255, 255, 255);//text color white
imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5, $code, $fg);
header("Cache-Control: no-cache, must-revalidate");
ob_clean();
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);

?>


