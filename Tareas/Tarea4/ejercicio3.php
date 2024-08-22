<?php
$numeros = [5, 12, 8, 3, 15];

$mayor = $numeros[0];
$menor = $numeros[0];

for ($i = 1; $i < 5; $i++) {
    if ($numeros[$i] > $mayor) {
        $mayor = $numeros[$i];
    }
    else if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    }
}

echo "<div style='border: 2px solid red;'>Mayor: " . $mayor . "</div>";
echo "<div style='border: 2px solid red;'>Menor: " . $menor . "</div>";
?>
