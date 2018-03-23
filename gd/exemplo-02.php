<?php


$image = imagecreatefromjpeg("certificado.jpg");


$titleColor = imagecolorallocate($image,0,0,0);
$grey = imagecolorallocate($image,100,100,100);

imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image,5,440,350,"Claudio Junior",$titleColor);
imagestring($image,3,440,370,utf8_decode("Concluído em: "). Date("d/m/Y"),$titleColor);


header("Content-type: image/jpeg");

imagejpeg($image,"certificado". Date("Y-m-d").".jpg",100);

imagedestroy($image);

?>