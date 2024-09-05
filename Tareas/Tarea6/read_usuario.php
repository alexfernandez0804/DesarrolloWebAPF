<?php
include 'conexion.php';
$sql="SELECT email, nivel FROM usuarios";
$resultado = $con->query($sql);
?>

<table>
    <tr>
        <th>Email</th>
        
        <th>Nivel</th>
    </tr>

    <?php while($fila = $resultado->fetch_assoc()) { ?>

    <tr>
        <td><?php echo $fila['email']; ?></td>
        <td><?php
            if($fila['nivel']==1)
            {
                echo "Administrador";
            }
            else
            {
                echo "Usuario";
            } ?>
        </td>
    </tr>

    <?php } ?>

</table>

<a href="form_create_usuario.html">Crear Usuario</a>

