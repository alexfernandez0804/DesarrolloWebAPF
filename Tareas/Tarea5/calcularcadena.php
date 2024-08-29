<?php
require_once 'OperacionesCadena.php';

if (isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];

    $operaciones = new OperacionesCadena($cadena);

    echo "Cadena Original: " . $operaciones->cadena . "<br>";
    echo "Cadena Invertida: " . $operaciones->invertir() . "<br>";
    echo "Cadena en Mayúsculas: " . $operaciones->mayuscula() . "<br>";
    echo "Cadena en Minúsculas: " . $operaciones->minuscula() . "<br>";
}
?>
