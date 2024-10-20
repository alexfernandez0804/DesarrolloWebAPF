<?php 
session_start();
include 'conexion.php';

for ($i = 1; $i <= 4; $i++) {
    $nombres=$_POST['nombres_'.$i];
    $apellidos=$_POST['apellidos_'.$i];
    $cu=$_POST['cu_'.$i];
    $sexo=$_POST['sexo_'.$i];
    $codigocarrera=$_POST['codigocarrera_'.$i];
    $archivo_original=$_FILES['fotografia_'.$i]['name'];
    $arreglo=explode(".",$archivo_original);
    $extension=$arreglo[1];
    $fotografia=uniqid().'.'.$extension;

    copy($_FILES['fotografia_'.$i]['tmp_name'],'images/'.$fotografia);


    $sql="INSERT INTO alumnos (fotografia,nombres,apellidos,cu,sexo,codigocarrera) VALUES ('$fotografia','$nombres','$apellidos','$cu','$sexo','$codigocarrera')";
    $resultado=$con->query($sql);
    if($resultado){?>
    <h1>Datos insertados correctamente</h1>
    <meta http-equiv="refresh" content="3; url=lista_alumnos.php">
    <?php
    }else{
        echo "Error al insertar los datos";
    }
}
?>


