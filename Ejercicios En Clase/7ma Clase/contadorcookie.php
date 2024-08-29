<?php
if (isset ($_COOKIE['contador']))
{
    $valor=$_COOKIE['contador']+1;
    echo "es la visita ".$valor;
    setcookie("contador", $valor, 0); 
}
else
{
    echo "es la la visita 1";
    setcookie("contador", 1, 0);
}
?>