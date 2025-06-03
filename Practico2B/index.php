<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Tabla</title>
</head>
<body>
    <?php
    $equipos = array(
        array(
            "nombre" => "Nacional",
            "puntos" => 4, 
            "partidosJugados" => 2, 
            "partidosGanados" => 1,
            "partidosEmpatados" => 1,
            "partidosPerdidos" => 0,
            "golesAfavor" => 3,
            "golesContra" => 2,
            "dif" => 1
        ),
        array(
            "nombre" => "Peñarol",
            "puntos" => 6,
            "partidosJugados" => 2,
            "partidosGanados" => 2,
            "partidosEmpatados" => 0,
            "partidosPerdidos" => 0,
            "golesAfavor" => 4,
            "golesContra" => 1,
            "dif" => 3
        ),
        array(
            "nombre" => "River",
            "puntos" => 3, 
            "partidosJugados" => 2, 
            "partidosGanados" => 1,
            "partidosEmpatados" => 0,
            "partidosPerdidos" => 1,
            "golesAfavor" => 4,
            "golesContra" => 3,
            "dif" => 1 
        ),
        array(
            "nombre" => "Danubio",
            "puntos" => 4, 
            "partidosJugados" => 2, 
            "partidosGanados" => 1,
            "partidosEmpatados" => 1,
            "partidosPerdidos" => 0,
            "golesAfavor" => 2,
            "golesContra" => 1,
            "dif" => 1 
        ),
        array(
            "nombre" => "Racing",
            "puntos" => 4, 
            "partidosJugados" => 3, 
            "partidosGanados" => 1,
            "partidosEmpatados" => 1,
            "partidosPerdidos" => 1,
            "golesAfavor" => 4,
            "golesContra" => 4,
            "dif" => 0
        ),
        array(
            "nombre" => "Liverpool",
            "puntos" => 2, 
            "partidosJugados" => 2, 
            "partidosGanados" => 0,
            "partidosEmpatados" => 2,
            "partidosPerdidos" => 0,
            "golesAfavor" => 3,
            "golesContra" => 3,
            "dif" => 0 
        ),
        array(
            "nombre" => "Wanderers",
            "puntos" => 1, 
            "partidosJugados" => 2, 
            "partidosGanados" => 0,
            "partidosEmpatados" => 1,
            "partidosPerdidos" => 1,
            "golesAfavor" => 1,
            "golesContra" => 2,
            "dif" => -1 
        ),
        array(
            "nombre" => "Defensor Sporting",
            "puntos" => 6, 
            "partidosJugados" => 2, 
            "partidosGanados" => 2,
            "partidosEmpatados" => 0,
            "partidosPerdidos" => 0,
            "golesAfavor" => 7,
            "golesContra" => 1,
            "dif" => 6
        ),
    );
        
function mostrarTabla($equipos) {
    echo "<table class='tabla' border='1' cellpadding='5' cellspacing='0' >";
    echo "<thead>";
    echo '<tr><th colspan="9" class="header-tabla" ">Uruguayo 1ª División - TABLA APERTURA</th></tr>';
    echo "<tr>
            <th>Posiciones</th>
            <th>PTS</th>
            <th>PJ</th>
            <th>PG</th>
            <th>PE</th>
            <th>PP</th>
            <th>GF</th>
            <th>GC</th>
            <th>DIF</th>
          </tr>";
    echo "</thead>";
    echo "<tbody>";
    
    foreach ($equipos as $equipo) {
        echo "<tr>";
        echo "<td>" . $equipo["nombre"] . "</td>";
        echo "<td>" . $equipo["puntos"] . "</td>";
        echo "<td>" . $equipo["partidosJugados"] . "</td>";
        echo "<td>" . $equipo["partidosGanados"] . "</td>";
        echo "<td>" . $equipo["partidosEmpatados"] . "</td>";
        echo "<td>" . $equipo["partidosPerdidos"] . "</td>";
        echo "<td>" . $equipo["golesAfavor"] . "</td>";
        echo "<td>" . $equipo["golesContra"] . "</td>";
        echo "<td>" . $equipo["dif"] . "</td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
}

mostrarTabla($equipos);
    ?>
</body>
</html>
