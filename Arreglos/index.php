<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
$colores = ["rojo", "verde", "azul"];

// 1. Imprime el segundo color
echo $colores[1]; 

// 2. Añade "amarillo" al arreglo
$colores[] = "amarillo";

// 3. Imprime el número de colores
echo count($colores);
echo "<br>";
echo sort($colores);
echo "<br>";
echo array_push($colores);
echo "<br>";
echo array_pop($colores);
echo "<br>";
echo array_merge($colores);
echo "<br>";
echo in_array("verde", $colores);
?>
</body>
</html>