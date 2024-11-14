<?php
include ('conexion.php');

$sql = "SELECT id, correo, asunto, estado FROM correos WHERE bandeja = 'entrada'";
$resultado = $con->query($sql);

echo '<table class="table-emails">
        <thead>
            <tr>
                <th>Correo</th>
                <th>Asunto</th>
                <th>Estado</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody>';

    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$row['correo']}</td>
                <td>{$row['asunto']}</td>
                <td>" . ($row['estado'] == 'P' ? 'Pendiente' : 'Enviado') . "</td>
                <td><button class='btn-ver' onclick='verMensaje({$row['id']})'>Ver</button></td>
              </tr>";
    }

echo '</tbody></table>';

?>
