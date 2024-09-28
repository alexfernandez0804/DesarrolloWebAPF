<?php
$numero = rand(1, 4);
$nombre_gato = "gato".$numero.".jpg";
$imagen = imagecreatefromjpeg($nombre_gato);
header("Content-Type:image/jpeg");
imagejpeg($imagen);
?>