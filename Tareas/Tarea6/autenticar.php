<?php
include 'conexion.php';
session_start();
$email=$_POST['email'];
$password=sha1($_POST['password']);

$sql="SELECT email,nivel FROM usuarios WHERE email='$email' AND password='$password'";
$resultado=$con->query($sql);

if($resultado){
    if($fila=$resultado->fetch_assoc()){
        $_SESSION['email']=$fila['email'];
        header('Location: read_usuario.php');
    }
    else{
        echo "Error al autenticar";
        ?>
        <meta http-equiv="refresh" content="2;url=login.html">
        <?php
    }
}
else{
    echo "Error";
}
?>
