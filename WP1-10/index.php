<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Příklad č.1</h1>
<?php

    for ($ii=0; $ii <= 20; $ii+= 1) { 
       echo $ii .", ";
    }

    ?>

<p><h1>Příklad č.2</h1>
    <?php

    for ($i=0; $i <= 20; $i+= 1) { 
       echo $i . " , " . $i*$i . "<br>";
    }

    ?> <p>

<h1>Příklad č.3</h1>

<?php

for ($j=10; $j >= 0; $j-= 1) { 
    echo $j ."<br>";
 }

    ?>
Raketa letí

<p><h1>Přéklad č.4</h1>
    <?php
define('MAX_NUMBER', 100);
define('MIN_NUMBER', 0);
define('NUMBERS_COUNT', 10);

for ($i=0; $i < NUMBERS_COUNT; $i++) { 
    echo rand(MIN_NUMBER, MAX_NUMBER) . ",";
}


    ?> <p>
    <h1>Příklad č.5</h1>
    
    <h1>🕺</h1><?php
for ($p=0; $p <= 400; $p+= 20) { 
   ?><div style="display: block; width:<?= $p ?>px; height: 20px; background-color: #454d59;"></div> 
   <?php
 }

    ?>





</body>
</html>