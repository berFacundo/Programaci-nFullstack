<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura foreach</title>
</head>
<body>
    <?php
    echo "<h1>Ejercicio 1</h1><hr><br>";
        $nombres = ["Ana", "Luis", "Pedro", "María"];

        foreach ($nombres as $nombre) {
        echo $nombre . "<br>";
        }
    echo "<h1>Ejercicio 2</h1><hr><br>";
        $productos = [ "Pan" => 40, "Leche" => 60, "Queso" => 120 ];

    foreach ($productos as $nombre => $precio) {
        echo "Producto: $nombre - Precio: $precio<br>";
    }
    ?>
</body>
</html>