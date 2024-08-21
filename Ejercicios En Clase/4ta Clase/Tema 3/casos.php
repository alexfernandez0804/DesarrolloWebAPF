<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $posicion = "arriba";
    switch($posicion)
    {
        case "arriba"; // bloque1
        echo "La variable contiene";
        echo "El valor arriba"
        break;

        case "abajo"; // bloque2
        echo "La variable contiene";
        echo "El valor abajo"
        break;

        default; // bloque3
        echo "La variable contiene";
        echo "El valor arriba"
        break;

        case "arriba"; // bloque1
        echo "La variable contiene otro valor";
        echo "Distinto de arriba y abajo"
        break;

    }
    ?>
</body>
</html>