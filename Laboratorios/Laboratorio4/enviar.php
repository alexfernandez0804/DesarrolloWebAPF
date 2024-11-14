<?php
include ('conexion.php');

    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO correos (correo, asunto, mensaje, bandeja, estado) VALUES ('$correo', '$asunto', '$mensaje', 'salida', 'P')";
    if ($con->query($sql) === TRUE) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Error al enviar el mensaje: " . $con->error;
    }

    $con->close();

?>
