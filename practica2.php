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
    <ul>
    <?php 
    define("IVA", 0.21);
    $lenguajes=array(
    array("PHP", "Introducció a PHP", "15.5"),
    array("Laravel", "Laravel per experts", "30"),
    array("Django", "Dominant Django", "10")
    );
    ?>
    <div>
    <li>
        <?php
        for(i=0; i<3; $i++){
        $lenguajes[$i];
  }
        ?> 
    </div>
    </li>
    <li>
    <?php

    ?>
    </li>
    </ul> 
</body>
</html>