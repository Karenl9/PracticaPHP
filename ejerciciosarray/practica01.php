<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Habitaciones de Hotel</title>
</head>
<body>
    <ul>
    <?php
    // Crear una matriz bidimensional para representar las habitaciones del hotel
    $numPlantas = 5;
    $numHabitacionesPorPlanta = 10;
    $hotel = array();

    // Inicializar el estado de todas las habitaciones con números aleatorios de los clientes 
    for ($planta = 0; $planta < $numPlantas; $planta++) {
        for ($habitacion = 0; $habitacion < $numHabitacionesPorPlanta; $habitacion++) {
            $clientesAleatorios = rand(0, 4);
            $hotel[$planta][$habitacion] = $clientesAleatorios;
        }
    }

    // Recorrer la matriz y mostrar el estado de cada habitación
    for ($planta = 0; $planta < $numPlantas; $planta++) {
        for ($habitacion = 0; $habitacion < $numHabitacionesPorPlanta; $habitacion++) {
            $numClientes = $hotel[$planta][$habitacion];
            echo "<li>A l'habitació $habitacion de la planta $planta ";
            if ($numClientes == 0) {
                echo "està buida.";
            } elseif ($numClientes == 4) {
                echo "està plena.";
            } else {
                echo "té $numClientes clients.";
            }
            echo "</li>";
        }
    }
    ?>
    </ul>
</body>
</html>
