<?php
$numerofilas = $_POST['numerofilas'];
$numerocolumnas = $_POST['numerocolumnas'];
$fila = $_POST['fila'];
$columna = $_POST['columna'];
$color = $_POST['color'];

echo "<table style='border-collapse: collapse;'>";

for ($i = 1; $i <= $numerofilas; $i++) {
    echo "<tr>";

    for ($j = 1; $j <= $numerocolumnas; $j++) {
        if ($i == $fila && $j == $columna) {
            echo "<td style='width: 50px; height: 50px; background-color: #FFC000; border: 1px solid black;'><img src='images/Bowser.png' style='width: 50px; height: 50px;'></td>";
        } else {
            $casilla = (($i + $j) % 2 == 0) ? $color : "#FF0000";
            echo "<td style='width: 50px; height: 50px; background-color: $casilla; border: 1px solid black;'></td>";
        }
    }

    echo "</tr>";
}

echo "</table>";
?>
