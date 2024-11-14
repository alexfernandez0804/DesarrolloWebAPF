<?php
include('conexion.php'); 

$sql = "SELECT titulo, imagen FROM libros";
$resultado = $con->query($sql);

$libros = [];
while ($row = $resultado->fetch_assoc()) {
    $libros[] = [
        'titulo' => $row['titulo'],
        'imagen' => 'images/' . $row['imagen'] 
    ];
}

header('Content-Type: application/json');
echo json_encode($libros);
?>
