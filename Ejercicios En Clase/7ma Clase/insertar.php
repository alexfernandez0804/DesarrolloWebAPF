<?php
include ("pila.php");

$p=new Pila(15);
$p->insertar($_GET['elemento']);

?>

<meta http-equiv="refresh" content="3; url=menu.html">
