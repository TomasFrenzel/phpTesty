<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Funkce</title>
</head>
<body>
    <h1>HEllo</h1>
    <?php 
    
    function pozdrav(){
        echo "Ahoj hraci";
        echo "<br>";
    };

    function score(){
        echo " Vaše skore je ".(10 + 5);
    };

    function init(){
        pozdrav();
        score();
    };
     init();


     $oprava = "každá fucke musí být uzavřena STŘEDNÍKEM";
     echo $oprava;
    
    ?>
</body>
</html>