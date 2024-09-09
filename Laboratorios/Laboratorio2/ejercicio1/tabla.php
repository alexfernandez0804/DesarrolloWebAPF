<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filas = $_POST['filas'];
    $columnas = $_POST['columnas'];

    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";

    for ($i = 1; $i <= $filas; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columnas; $j++) {
            $multiplicacion = $i * $j;
            echo "<td>$multiplicacion</td>";
        }
        echo "<th style='color: white; background-color: red;'>$i</th>";
        echo "</tr>";
    }

    echo "<tr>";
    for ($j = 1; $j <= $columnas; $j++) {
        echo "<th style='color: white; background-color: red;'>$j</th>";
    }
    echo "<th style='color: white; background-color: red;'></th>";
    echo "</tr>";

    echo "</table>";
}
?>
