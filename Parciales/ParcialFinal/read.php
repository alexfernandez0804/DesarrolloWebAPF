<?php include 'conexion.php';

$sql="SELECT imagen, l.id,titulo, autor, editorial, anio, carrera FROM libros l
 left join editorial e on l.ideditorial=e.id ";

if(isset ($_GET['ordenar'])){
    $sql.=" order by ".$_GET['ordenar'];
}

$resultado=$con->query($sql);
$datos=[];
 while($fila=$resultado->fetch_assoc()) 
    {
        $datos[]=$fila;
     }
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>