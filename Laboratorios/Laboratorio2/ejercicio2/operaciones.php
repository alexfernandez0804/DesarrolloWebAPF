<?php
session_start();

class Operaciones {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calcularSuma() {
        return $this->a + $this->b + $this->c;
    }

    public function calcularMayor() {
        return max($this->a, $this->b, $this->c);
    }
}

if (isset($_SESSION['a']) && isset($_SESSION['b']) && isset($_SESSION['c'])) {
    $operaciones = new Operaciones($_SESSION['a'], $_SESSION['b'], $_SESSION['c']);
    
    $_SESSION['suma'] = $operaciones->calcularSuma();
    $_SESSION['mayor'] = $operaciones->calcularMayor();

    $a = $_SESSION['a'];
    $b = $_SESSION['b'];
    $c = $_SESSION['c'];
    $suma = $_SESSION['suma'];
    $mayor = $_SESSION['mayor'];
} else {
    echo "No hay datos disponibles. Introduzca los valores primero desde el menú.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de los Cálculos</title>
</head>
<body>
    <h1>Resultados de los Cálculos</h1>
    <table border="1" style="border-collapse: collapse; text-align: center;">
        <tr style="background-color: red; color: white;">
            <th>Valor de A</th>
            <th>Valor B</th>
            <th>Valor C</th>
        </tr>
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo $b; ?></td>
            <td><?php echo $c; ?></td>
        </tr>
        <tr>
            <td style="background-color: red; color: white;">Suma</td>
            <td colspan="2"><?php echo $suma; ?></td>
        </tr>
        <tr>
            <td style="background-color: red; color: white;">Mayor</td>
            <td colspan="2"><?php echo $mayor; ?></td>
        </tr>
    </table>
</body>
</html>
