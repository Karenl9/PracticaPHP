<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <h1>Llista de cursos</h1>
    <h2>Numero de cursos apuntats: 3</h2>
</head>
<body>
    <?php 
    define("IVA", 0.21);
    $cursos = array(
        array("ID" => 1, "NOM" => "PHP", "DESC" => "Introducció a PHP", "PREU" => 15.5),
        array("ID" => 2, "NOM" => "Laravel", "DESC" => "Laravel per experts", "PREU" => 30),
        array("ID" => 3, "NOM" => "Django", "DESC" => "Dominant Django", "PREU" => 10)
    );
    ?>
    <div>
    <?php 
     function calcularTotalCursos($cursos) {
        return count($cursos);
    }

    $imagenes = array(
        "id1.jpg",
        "id2.jpg",
        "id3.jpg"
    );

      for ($i = 0; $i<3; $i++) {
        $curs = $cursos[$i];
        $nomCurs = $curs["NOM"];
        $descripcio = $curs["DESC"];
        $preuSenseIVA = $curs["PREU"];
  
        $preuAmbIVA = $preuSenseIVA + ($preuSenseIVA * IVA);
        
        echo "<div style='border: 1px solid black;'>";
        echo "<img src='" . $imagenes[$i] . "' alt='$nomCurs' />"; 
        echo "<h3>$nomCurs</h3>";
        echo "<p>$descripcio</p>";
        echo "<p>Precio con IVA: $preuAmbIVA €</p>";
        echo "</div>";
    }
    ?>
    </div> 
</body>
</html>