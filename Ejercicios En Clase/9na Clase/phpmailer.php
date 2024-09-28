<?php
require_once("phpmailer/class.phpmailer.php");
$correo = new phpmailer();
//Datos personales del emisor
$correo->From = "luis@nccextremadura.org";
$correo->FromName = "Luis Miguel Cabezas";
$correo->Subject = "Mensaje de prueba";
$correo->Body = "Cuerpo del mensaje";
//Direcci—n de destino
$correo->AddAddress("zeev@php.zend.com","Zeev Suraski");
if (!$correo->Send()) {

echo "Correo enviado correctamente";

} else {

echo "El correo no ha podido enviarse";

}
?>