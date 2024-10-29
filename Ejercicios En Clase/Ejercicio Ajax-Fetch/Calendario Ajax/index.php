<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        #contenedor {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 1200px;
            border: 1px solid black;
        }

        #menu-contenido {
            display: flex;
            width: 100%;
        }

        #menu {
            width: 20%;
            color: white;
            text-align: center;
            padding: 10px;
            box-sizing: border-box;
        }

        #menu h2 {
            margin: 0;
            padding: 10px 0;
            background-color: #D63B27;
            font-size: 1.2em;
            font-weight: bold;
        }

        #menu label {
            display: block;
            margin: 10px 0 5px;
        }

        #menu select {
            width: 80%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .contenido {
            width: 80%;
            padding: 20px;
            border-left: 1px solid black;
            box-sizing: border-box;
            text-align: center;
        }

        .piepagina {
            width: 100%;
            text-align: center;
            padding: 15px;
            background-color: #F8AD8F;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="contenedor">

        <div id="menu-contenido">
            <div id="menu">
                <h2 class="titulo">Opciones</h2>

                <form>
                    <label for="mes">Mes:</label>
                    <select id="mes">
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                    
                    <label for="anio">Año:</label>
                    <select id="anio">
                        <?php
                        for ($anio = 1975; $anio <= 2024; $anio++) {
                            echo "<option value='$anio'>$anio</option>";
                        }
                        ?>
                    </select>
                </form>
            </div>

            <div id="contenido" class="contenido"></div>
        </div>

        <div class="piepagina">
            <p>Sucre - Semestre 2-2024</p>
        </div>
        
    </div>

    <script src="ajax.js"></script>
</body>
</html>
