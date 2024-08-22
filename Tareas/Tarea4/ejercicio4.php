<?php
echo "<table border='1' cellspacing='0' cellpadding='0'>";
for ($fila = 1; $fila <= 8; $fila++) {
    echo "<tr>";

    for ($columna = 1; $columna <= 8; $columna++) {
        if (($fila + $columna) % 2 == 0) {
            $color = "white";
        } 
        else {
            $color = "black";
        }

        echo "<td style='width:30px; height:30px; background-color:$color;'></td>";
    }

    echo "</tr>";
}
echo "</table>";
?>
