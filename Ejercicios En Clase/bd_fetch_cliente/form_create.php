<?php 
include 'conexion.php';
$sql="SELECT id,numero_mesa FROM mesa";
$resultado=$con->query($sql);

?>

    <form action="javascript:crear()" method="post" enctype="multipart/form-data" id="formulario">
    <div class="mb-3">
    <label for="fotografia" class="form-label">Fotografia</label>
    <input type="file" class="form-control" name="fotografia" id="fotografia"><br>
    </div>
    <div class="row">
    <div class="col-md-6">
    <label for="nombres">Nombres</label>
    <input type="text" name="nombres" id="nombres"><br>
    </div>
    <div class="col-md-6">
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos"><br>
    </div>
    </div>
    <label for="carnet">Carnet</label>
    <input type="text" name="carnet" id="carnet"><br>
    <label for="sexo">Sexo</label>
    <input type="radio" name="sexo" id="sexof" value="femenino">Femenino
    <input type="radio" name="sexo" id="sexov" value="masculino">Masculino <br>
    <label for="fecha_nacimiento">Fecha de nacimiento</label>
    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"><br>
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion"><br>
    <label for="mesa_id">Mesa</label>
    <select name="mesa_id" id="mesa_id">
        <?php while($fila=$resultado->fetch_assoc()) 
    {?>
            <option value="<?php echo $fila['id']; ?>"><?php echo $fila['numero_mesa'];?></option>
            <?php }
            ?>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
