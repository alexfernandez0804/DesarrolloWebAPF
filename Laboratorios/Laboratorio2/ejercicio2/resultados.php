<?php
session_start();

if (isset($_SESSION['a']) && isset($_SESSION['b']) && isset($_SESSION['c'])) {
    $a = $_SESSION['a'];
    $b = $_SESSION['b'];
    $c = $_SESSION['c'];
    $suma = $_SESSION['suma'];
    $mayor = $_SESSION['mayor'];
} else {
    echo "No hay datos disponibles para mostrar.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados de los Cálculos</h1>
    <table border="1" style="border-collapse: collapse; text-align: center;">
        <tr style="background-color: red; color: white;">
            <th>Valor de A</th>
            <th>Valor B</th>
            <th>Valor C</th>
        </tr>
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo $b; ?></td>
            <td><?php echo $c; ?></td>
        </tr>
        <tr>
            <td style="background-color: red; color: white;">Suma</td>
            <td colspan="2"><?php echo $suma; ?></td>
        </tr>
        <tr>
            <td style="background-color: red; color: white;">Mayor</td>
            <td colspan="2"><?php echo $mayor; ?></td>
        </tr>
    </table>
</body>
</html>
