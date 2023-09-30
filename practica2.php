<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define("IVA", 0.21);
    $cursos = array(array("ID" => 1, "Desc" => "Introducció a PHP", "Nom" => "Php", "Preu" => 15.5), 
                    array("ID" => 2, "Desc" => "Laravel per experts", "Nom" => "Laravel", "Preu" => 30),
                    array("ID" => 3, "Desc" => "Dominant Django", "Nom" => "Django", "Preu" => 10));
    ?>                 
    <h1> Llista de cursos</h1>
    <h2> Numero de cursos apuntats: <?php echo "" . count($cursos); ?></h2>

    <?php 
    for($i = 0; $i<count($cursos); ++$i) {  
        $preuIVA = $cursos[$i]["Preu"] * IVA;
    ?> 
    <?php 
    $imagenes = array(
        "id1.jpg",
        "id2.jpg",
        "id3.jpg");
    ?> 
    <div style="width: 400px; border: 1px solid black">
    <img src="<?php echo $imagenes[$i]; ?>" alt="<?php echo $cursos[$i]["Nom"]; ?>" />
    <h3> <?php echo $cursos[$i]["Nom"]; ?> </h3>
    <p> <?php echo $cursos[$i]["Desc"]; ?> </p>
    <p> El preu amb IVA: <?php echo $cursos[$i]["Preu"] + $preuIVA; ?> €</p>
    </div>           
    <?php 
    } 
    ?>
</body>
</html> 