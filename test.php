 <?php
$im = imagecreatefrompng("test.png");
ob_clean();
header('Content-Type: image/png');

imagepng($im);
imagedestroy($im)
        ?>