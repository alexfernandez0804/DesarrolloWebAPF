<?php
include 'conexion.php';
session_start();

$sql = "SELECT fotografia, a.id, nombres, apellidos, cu, sexo, carrera FROM alumnos a
LEFT JOIN carreras c ON a.codigocarrera = c.codigo";

$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .alumnos {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #2a4d8f;
            color: white;
        }

        img {
            width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="alumnos">
    <table>
        <tr>
            <th>Nro</th>
            <th>Fotografía</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Sexo</th>
            <th>Carrera</th>
        </tr>

        <?php 
        $i = 1;
        while($fila = $resultado->fetch_assoc()) { ?>
        <tr style="background-color: <?php echo ($i % 2 == 0) ? '#B7B7B7' : 'white'; ?>;">
            <td><?php echo $i; ?></td>
            <td><img src="images/<?php echo $fila['fotografia']; ?>" width="100px"></td>
            <td><?php echo $fila['nombres']; ?></td>
            <td><?php echo $fila['apellidos']; ?></td>
            <td><?php echo $fila['cu']; ?></td>
            <td><?php echo $fila['sexo'] == 'M' ? 'Masculino' : 'Femenino'; ?></td>
            <td><?php echo $fila['carrera']; ?></td>
        </tr>
        <?php $i++; } ?>
    </table>
    </div>
</body>
</html>
