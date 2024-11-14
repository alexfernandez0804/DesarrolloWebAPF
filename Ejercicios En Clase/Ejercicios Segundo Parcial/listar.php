<?php
session_start();
include('conexion.php');

$sql = "SELECT usuario, nombrecompleto, nivel FROM usuarios";
$resultado = $con->query($sql);

echo '<table border="1" style="width: 100%; border-collapse: collapse;">';
echo '<tr style="background-color: #002d62; color: white;">
        <th>Correos</th>
        <th>Nombre Completo</th>
        <th>Nivel</th>
        <th>Operación</th>
      </tr>';

while ($row = $resultado->fetch_assoc()) {
    $correo = $row['usuario'];
    $nombre_completo = $row['nombrecompleto'];
    $nivel = $row['nivel'];
    $nivel_texto = ($nivel == 0) ? "Administrador" : "Usuario";

    echo "<tr>
            <td>$correo</td>
            <td>$nombre_completo</td>
            <td>$nivel_texto</td>";

    if ($_SESSION['nivel'] == 0 && $nivel == 1) {
        echo "<td><button style='background-color: orange; color: white; padding: 5px;' onclick=\"cambiarNivel('$correo', 0)\">Cambiar a administrador</button></td>";
    } else {
        echo "<td><button style='background-color: gray; color: white; padding: 5px;' disabled>Cambiar a usuario</button></td>";
    }

    echo "</tr>";
}

echo '</table>';
?>
