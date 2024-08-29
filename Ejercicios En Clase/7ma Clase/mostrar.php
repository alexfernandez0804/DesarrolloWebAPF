<?php

include("pila.php");

$p=new Pila(15);
$p->mostrar($_GET['elemento']);

?>

<meta http-equiv="refresh" content="3; url=menu.html">