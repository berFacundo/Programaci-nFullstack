<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura while</title>
</head>
<body>
    <?php
        echo "<h1>Ejercicio 1</h1><hr><br>";
        $i = 10;
        while ($i > 0) {
            echo $i."<br>";
            $i--;
        }
        echo "<h1>Ejercicio 2</h1><hr><br>";
        $j = 0;
        $res = 0;
        while ($res < 48) {
            $j++;
            $res = 3 * $j;
            echo $res . "<br>";
        }
        echo "<h1>Ejercicio 3</h1><hr><br>";

        $sum = 0;
        $k = 1;
        while ($k <= 10) {
            $sum += $k;
            $k++;
        }
        echo "Suma de el 1 al 10 es " . $sum . "<br>";
    ?>
</body>
</html>