<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <h1>Descrivint a Kurt Cagle</h1>
    <h2>Les dades de Kurt son:</h2>
</head>
<body>
    <ul>
    <?php 
    $name = 'Kurt';
    $surname = 'Cagle';
    $age = '40';
    $date = '1983-05-12';
    $boolean1 = '654332211';
    $boolean2 = '933332211';
    $adress = 'Carrer de turin, 15';
    $email = 'kurt.cagle@example.com';
    $job = 'Si';
    $height = '1,67';
    ?>
    <div>
    <li>
        <?php
        echo "Es diu $name $surname"; 
        ?> 
    </div>
    </li>
    <li>
     <div>
        <?php 
        echo "Té $age anys";
        ?> 
     </div>
     </li>
     <li>
     <div>
        <?php 
        echo "Va neixer al any:";
        ?>
        <b>1983-05-12</b> 
     </div>
    </li>
    <li>
     <div>
        <?php 
        echo "Els seus telèfóns son: $boolean1 - $boolean2";
        ?> 
     </div>
    </li>
    <li>
     <div>
        <?php 
        echo "Viu a: $adress";
        ?> 
     </div>
    </li>
    <li>
     <div>
        <?php 
        echo "El seu email és: $email";
        ?> 
     </div>
    </li>
    <li>
     <div>
        <?php 
        echo "Treballa: $job";
        ?> 
     </div>
    </li>
    <li>
     <div>
        <?php 
        echo "I medeix: $height";
        ?> 
     </div>
    </li>
    </ul> 
</body>
</html>