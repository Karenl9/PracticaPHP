<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Mesas y Comensales</title>
</head>
<body>
    <ul>
    <?php
    $numMesas = 9; // Cambiar según la cantidad de mesas 

    // Crear un array para las mesas y los comensales
    $mesas = array();

    // Llenar el array de mesas con el número aleatorio de comensales
    for ($i = 0; $i <= $numMesas; $i++) {
        $comensales = rand(0, 5); // Número aleatorio de comensales (entre 0 y 5)
        $mesas[$i] = $comensales;
    }

    // Recorrer el array de mesas y mostrar el estado de cada una
    for ($i = 0; $i <= $numMesas; $i++) {
        echo "<li>La taula $i ";
        if ($mesas[$i] == 0) {
            echo "està buida.";
        } elseif ($mesas[$i] == 5) {
            echo "està plena.";
        } else {
            echo "té {$mesas[$i]} comensals.";
        }
        echo "</li>";
    }
    ?>
    </ul>
</body>
</html>

