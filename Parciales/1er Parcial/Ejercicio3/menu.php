<?php
session_start();

if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
$_SESSION['a'] = $_POST['a'];
$_SESSION['b'] = $_POST['b'];
$_SESSION['c'] = $_POST['c'];
}

include 'operaciones.php';

if (isset($_SESSION['a']) && isset($_SESSION['b']) && isset($_SESSION['c'])) {
    $a = $_SESSION['a'];
    $b = $_SESSION['b'];
    $c = $_SESSION['c'];
    $operacion = new Operaciones($a, $b, $c);
}

if (isset($_GET['operacion'])) {
    switch ($_GET['operacion']) {
        case 'suma':
            $resultado = $operacion->sumar();
            break;
        case 'restar':
            $resultado = $operacion->restar();
            break;
        case 'multiplicar':
            $resultado = $operacion->multiplicar();
            break;
        case 'dividir':
            $resultado = $operacion->dividir();
            break;
    }
    echo "El resultado de $a , $b y $c es $resultado";
    exit;
}

echo '<ul>';
echo '<li><a href="menu.php?operacion=suma">Sumar</a></li>';
echo '<li><a href="menu.php?operacion=restar">Restar</a></li>';
echo '<li><a href="menu.php?operacion=multiplicar">Multiplicar</a></li>';
echo '<li><a href="menu.php?operacion=dividir">Dividir</a></li>';
echo '</ul>';

?>