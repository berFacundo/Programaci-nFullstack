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
        $temperatura = 36; //En grados Celsious
        $humedad = 4; //Porcentaje
        $viento = 80; //En kilómetros por hora 
        $precipitacion = 97; //Porcentaje
            
        function alertaTemperatura($temperatura) {
            if ($temperatura >= 35) {
                echo "🔥 Alerta extrema de calor: Peligro para la salud. Evita salir al sol.<br>";
            } elseif ($temperatura >= 30) {
                echo "⚠️ Alerta de calor: Mantente hidratado y busca sombra.<br>";
            } elseif ($temperatura <= 5) {
                echo "❄️ Alerta de frío: Usa ropa abrigada.<br>";
            } else {
                echo "🌤️ Temperatura moderada: Condiciones agradables.<br>";
            }
        }

        function alertaHumedad($humedad) {
            if ($humedad >= 80) {
                echo "💧 Humedad muy alta: Ambiente sofocante, posibles molestias.<br>";
            } elseif ($humedad >= 60) {
                echo "🌫️ Humedad alta: Sensación térmica aumentada.<br>";
            } else {
                echo "🌬️ Humedad moderada o baja: Clima cómodo.<br>";
            }
        }

        function alertaViento($viento) {
            if ($viento >= 50) {
                echo "🌪️ Alerta de viento fuerte: Evita actividades al aire libre.<br>";
            } elseif ($viento >= 20) {
                echo "🍃 Viento moderado: Precaución al conducir o caminar cerca de árboles.<br>";
            } else {
                echo "🌀 Viento leve: Condiciones tranquilas.<br>";
            }
        }

        function alertaPrecipitacion($precipitacion) {
            if ($precipitacion >= 80) {
                echo "🌧️ Alta probabilidad de lluvia: Lleva paraguas y evita zonas propensas a inundaciones.<br>";
            } elseif ($precipitacion >= 50) {
                echo "🌦️ Probabilidad media de lluvia: Considera llevar protección.<br>";
            } else {
                echo "☀️ Baja probabilidad de lluvia: Día mayormente seco.<br>";
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