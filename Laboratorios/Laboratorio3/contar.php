<?php
include 'conexion.php';

$sql = "SELECT UPPER(sexo) AS sexo, COUNT(*) as total FROM alumnos GROUP BY sexo";
$resultado = $con->query($sql);

$total_varones = 0;
$total_mujeres = 0;

while ($fila = $resultado->fetch_assoc()) {
    if ($fila['sexo'] == 'M') {
        $total_varones = $fila['total'];
    } elseif ($fila['sexo'] == 'F') {
        $total_mujeres = $fila['total'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: solid 1px black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table style="border: solid 1px black; width: 50%; margin: auto;">
        <tr>
            <td>Total Varones</td>
            <td><img src="images/varon.png" alt="Varón" width="50px"></td>
            <td><?php echo $total_varones; ?></td>
        </tr>
        <tr>
            <td>Total Mujeres</td>
            <td><img src="images/mujer.png" alt="Mujer" width="50px"></td>
            <td><?php echo $total_mujeres; ?></td>
        </tr>
    </table>
</body>
</html>
