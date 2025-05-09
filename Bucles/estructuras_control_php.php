<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>

<body>
    <?php
    echo ("<h1>Ejercicio 1</h1>");
    for ($i = 1; $i <= 100; $i++) {
        echo $i . "<br>";
    }
    echo ("<hr>");
    echo ("<h1>Ejercicio 2</h1>");
    for ($i = 1; $i <= 10; $i++) {
        echo 5 * $i . "<br>";
    }
    echo ("<hr>");
    echo ("<h1>Ejercicio 3</h1>");
    $suma = 0;
    for ($i = 2; $i <= 100; $i += 2) {
        $suma += $i;
    }
    echo $suma;
    ?>
</body>

</html>