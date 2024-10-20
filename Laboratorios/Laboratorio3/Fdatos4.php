<?php
session_start();
include ("conexion.php");

$sql = "SELECT codigo, carrera FROM carreras";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alumnos</title>
</head>
<body>
    <div class="tabla" style="width: 80%; margin: auto; border: solid 1px black;">
    <form action="create.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Fotografía</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CU</th>
                <th>Sexo</th>
                <th>Carrera</th>
            </tr>
            
            <?php for ($i = 1; $i <= 4; $i++) { ?>
            <tr>
                <td><input type="file" name="fotografia_<?php echo $i; ?>"></td>
                <td><input type="text" name="nombres_<?php echo $i; ?>"></td>
                <td><input type="text" name="apellidos_<?php echo $i; ?>"></td>
                <td><input type="text" name="cu_<?php echo $i; ?>"></td>
                <td>
                    <input type="radio" name="sexo_<?php echo $i; ?>" value="M">Masculino
                    <input type="radio" name="sexo_<?php echo $i; ?>" value="F">Femenino
                </td>
                <td>
                    <select name="codigocarrera_<?php echo $i; ?>">
                        <?php 
                        $resultado = $con->query($sql); 
                        while($fila = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['carrera']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <?php } ?>
        </table>
        
        <div style="margin-top: 10px;">
            <input type="submit" value="Insertar">
            <input type="reset" value="Borrar">
        </div>
    </form>
    </div>
</body>
</html>
