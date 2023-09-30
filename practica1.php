<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Descrivint a Kurt Cagle</h1>
    <h2>Les dades de Kurt son:</h2>
    <ul>
    <?php 
    $name = 'Kurt';
    $surname = 'Cagle';
    $age = '40';
    $data_naixement = date_create();
    date_date_set($data_naixement, 1983, 05, 12);
    $telefon = array("65434566", "933332211");
    $adress = 'Carrer de turin, 15';
    $email = 'kurt.cagle@example.com';
    $job = TRUE;
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
      Va neixer l'any: <strong><?php echo $data_naixement->format('Y/m/d') ?></strong>
     </div>
    </li>
    <li>
     <div>
        <?php 
        echo "Els seus telèfóns son: $telefon[0] - $telefon[1]";
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
     <div>Treballa:
        <?php 
         echo $job ? 'Si' : 'No'; 
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