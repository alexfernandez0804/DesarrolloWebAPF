<?php
$con = new mysqli("localhost", "root", "", "db_elecciones")
if($con->connect_error)
{
    die ("conexion fallida" .$con->connect_error);
}
?>
