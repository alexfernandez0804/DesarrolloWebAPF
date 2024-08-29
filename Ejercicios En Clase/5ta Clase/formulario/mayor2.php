<?php
$mayor=($_POST['n'][0])
foreach($_POST['n'] as $valor)
{
   if($valor>$mayor)
   {
       $mayor=$valor;
   }
}
echo "<div>El mayor es $mayor </div>";
?>