<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="validador_contraseñas.css">
    <title>Validador de contraseñas</title>
</head>
<body>
    <?php
    $contrasenia = "pepe12";
    function Validar_contrasenia ($contrasenia) {
        if (strlen($contrasenia) < 8) {
            echo "La contraseña debe tener al menos 8 caracteres";
        } 
        elseif (!preg_match('/[A-Z]/', $contrasenia)) {
            echo "La contraseña debe tener al menos una letra mayúscula";
        } 
        elseif (!preg_match('/[0-9]/', $contrasenia)) {
            echo "La contraseña debe tener al menos 1 número";
        }
        elseif (!preg_match('/[^A-Za-z0-9]/', $contrasenia)) {
            echo "La contraseña debe tener al menos 1 carácter especial";
        } else {
            echo "Contraseña válida";
        }
    }
    function Clasificar_contrasenia($contrasenia){
        if (strlen($contrasenia) < 8) {
            echo "<p class='debil'>Contraseña débil</p>";
        } 
        elseif (!preg_match('/[A-Z]/', $contrasenia)) {
            echo "<p class='debil'>Contraseña débil</p>";
        } 
        elseif (!preg_match('/[0-9]/', $contrasenia)) {
            echo "<p class='media'>Contraseña media</p>";
        }
        elseif (!preg_match('/[^A-Za-z0-9]/', $contrasenia)) {
            echo "<p class='media'>Contraseña media</p>";
        } else {
            echo "<p class='fuerte'>Contraseña fuerte</p>";
        }
    }
    Validar_contrasenia($contrasenia);
    Clasificar_contrasenia($contrasenia);
    ?>
</body>
</html>