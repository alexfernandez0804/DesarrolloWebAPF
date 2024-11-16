<?php
include('conexion.php'); 

$sql = "SELECT imagen FROM libros";
$resultado = $con->query($sql);

$libros = [];
while ($row = $resultado->fetch_assoc()) {
    $libros[] = [
        'imagen' => 'images/' . $row['imagen']
    ];
}

header('Content-Type: application/json');
echo json_encode($libros);
?>
