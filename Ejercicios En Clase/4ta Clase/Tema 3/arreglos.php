<?php

$numeros = array(1,2,3,4,5,6,7,8,9,0);
$mayor=$numeros[0];?>
<h1>Con ciclo For</h1>
<?php
for($i=1; $i<count($numeros); $i++)
{
    if($numeros[$i]>$mayor)
    {
        $mayor=$numeros[$i];
    }
}
echo "El mayor es $mayor";
?>

<h2>Con ciclo For each</h2>
<?php
$mayor=$numeros[0];
foreach($numeros as $numeros)
{
    if($numeros>$mayor)
    {
        $mayor=$numeros;
    }
}
echo "El mayor es $mayor";

?>

<h2>Con ciclo For each con indice</h2>
<?php
$mayor=$numeros[0];
$indicemayor=0;
foreach($numeros as $indice=>$numeros)
{
    if($numeros>$mayor)
    {
        $mayor=$numeros;
        $indicemayor=$indice;
    }
}
echo "El mayor es $mayor y esta en el indice $indicemayor";

?>