<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $contrasenia = "hola";
    $contador = "";
    function Validar_contrasenia ($contrasenia) {
        if (strlen($contrasenia) < 8) {
            echo "La contraseña debe tener al menos 8 caracteres.";
        } 
        elseif (!preg_match('/[A-Z]/', $contrasenia)) {
            echo "La contraseña debe contener al menos una letra mayúscula.";
        } 
        elseif (!preg_match('/[0-9]/', $contrasenia)) {
            echo "La contraseña debe contener al menos 1 número";
        }
        elseif (!preg_match('/[^A-Za-z0-9]/', $contrasenia)) {
            echo "La contraseña debe contener al menos 1 carácter especial";
        } else {
            echo "Contraseña válida (" . $contrasenia . ")";
        }
    }
    function Clasificar_contrasenia($contrasenia){

    }
    Validar_contrasenia($contrasenia);
    Clasificar_contrasenia($contraseña);
    ?>
</body>
</html>