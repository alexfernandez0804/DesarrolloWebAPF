<?php
session_start();

if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $_SESSION['a'] = $a;
    $_SESSION['b'] = $b;
    $_SESSION['c'] = $c;

    header('Location: menu.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducir Datos</title>
</head>
<body>
    <h1>Introducir Datos</h1>
    <form action="" method="post">
        <label for="a">Valor de A:</label>
        <input type="number" name="a" required>
        <br>
        <label for="b">Valor B:</label>
        <input type="number" name="b" required>
        <br>
        <label for="c">Valor C:</label>
        <input type="number" name="c" required>
        <br>
        <input type="submit" value="Guardar y Calcular">
    </form>
</body>
</html>
