<?php
include('conexion.php'); 

$orden = isset($_GET['order']) && $_GET['order'] == 'DESC' ? 'DESC' : 'ASC';
$nuevoOrden = $orden === 'ASC' ? 'DESC' : 'ASC';

$sql = "SELECT titulo, imagen FROM libros ORDER BY titulo $orden";
$resultado = $con->query($sql);

echo '<table border="1" style="width: 100%; border-collapse: collapse;">';
echo '<tr style="background-color: #002d62; color: white;">
        <th><a href="#" onclick="mostrarLibros(\'' . $nuevoOrden . '\')">Título</a></th>
        <th>Imagen</th>
      </tr>';

while ($row = $resultado->fetch_assoc()) {
    $titulo = $row['titulo'];
    $imagen = "images/" . $row['imagen']; 

    echo "<tr>
            <td>$titulo</td>
            <td><img src='$imagen' alt='$titulo' style='width:100px;height:auto;'></td>
          </tr>";
}

echo '</table>';
?>
