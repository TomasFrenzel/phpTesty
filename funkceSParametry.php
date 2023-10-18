<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkce s parametry</title>
</head>
<body>
<?php

    function pozdrav($name){
            echo "Ahoj ".$name;
            echo "<br>";
        }

        pozdrav("Adam");
        pozdrav("Eva");
        pozdrav("Martin");


    function calculator($n1, $n2){
        $suma = $n1 + $n2;
        echo $suma;
        echo "<br>";
    }

    calculator(20, 10);
    calculator(20, 15);

?>
</body>
</html>