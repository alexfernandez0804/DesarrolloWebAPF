<?php
$imagen = imagecreatefrompng("DarthVader.png");
header("Content-Type:image/png");
imagepng($imagen);
?>