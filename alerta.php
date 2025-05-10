<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alerta.css">
    <title>Alerta meteorológica</title>
</head>
<body>
    <?php
        $temperatura = 20; //En grados Celsious
        $humedad = 89; //Porcentaje
        $viento = 15; //En kilómetros por hora 
        $precipitacion = 42; //Porcentaje
            
        function alertaTemperatura($temperatura) {
            if ($temperatura >= 35) {
                echo "⚠️ALERTA⚠️ Muy altas temperaturas: Peligro para la salud. Evite salir al sol.";
            } elseif ($temperatura >= 30) {
                echo "Advertencia de calor: Mantente hidratado y busca sombra.";
            } elseif ($temperatura <= 0) {
                echo "⚠️ALERTA⚠️ Temperaturas muy bajas: Preferentemente no salga afuera.";
            } elseif ($temperatura <= 12) {
                echo "Advertencia de frío: Utilice abrigo.";
            } else {
                echo "Temperatura moderada: Condiciones agradables.";
            }
        }

        function alertaHumedad($humedad) {
            if ($humedad >= 85) {
                echo "Humedad muy alta: Ambiente sofocante, posibles molestias.";
            } elseif ($humedad >= 60) {
                echo "Humedad alta: Sensación térmica aumentada.";
            } else {
                echo "Humedad moderada/baja: Clima cómodo.";
            }
        }

        function alertaViento($viento) {
            if ($viento >= 100) {
                echo "⚠️ALERTA⚠️ Posible ciclón: Evite salir al aire libre y busque refugio.";
            } elseif ($viento >= 50) {
                echo "Advertencia de viento fuerte: Evita actividades al aire libre.";
            } elseif ($viento >= 20) {
                echo "Viento moderado: Precaución al conducir o caminar cerca de árboles.";
            } else {
                echo "Viento leve: Condiciones tranquilas.";
            }

        }

        function alertaPrecipitacion($precipitacion) {
            if ($precipitacion >= 80) {
                echo "Alta probabilidad de lluvia: Lleva paraguas y evita zonas propensas a inundaciones.";
            } elseif ($precipitacion >= 50) {
                echo "Probabilidad media de lluvia: Considera llevar protección.";
            } else {
                echo "Baja probabilidad de lluvia: Día mayormente seco.";
            }
        }

        
    ?>
    <div class="contenedor">
    <section class="columna">
        <?php
            echo "Temperatura: ".$temperatura."°C<br>";
        ?>
        <div class="alerta"><?php echo"<br>"; alertaTemperatura($temperatura); ?></div>
    </section>
    <section class="columna">
        <?php
            echo "Humedad: ".$humedad."%<br>";
        ?>
        <div class="alerta"><?php alertaHumedad($humedad); ?></div>
    </section>
    <section class="columna">
        <?php
            echo "Viento: ".$viento."km/h<br>";
        ?>
        <div class="alerta"><?php alertaViento($viento); ?></div>
    </section>
    <section class="columna">
        <?php
            echo "Precipitación: ".$precipitacion."%<br>";
        ?>
        <div class="alerta"><?php alertaPrecipitacion($precipitacion); ?></div>
    </section>
    </div>
</body>
</html>