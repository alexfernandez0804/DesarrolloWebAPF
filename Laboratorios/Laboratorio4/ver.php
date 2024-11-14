<?php
include ('conexion.php'); 

$id = intval($_GET['id']);
$sql = "SELECT correo, asunto, mensaje FROM correos WHERE id = $id";

$resultado = $con->query($sql);

$row = $resultado->fetch_assoc();

echo "<h3>Asunto: {$row['asunto']}</h3>";
echo "<p><strong>De:</strong> {$row['correo']}</p>";
echo "<p><strong>Mensaje:</strong></p>";
echo "<p>{$row['mensaje']}</p>";

$con->close();
?>
