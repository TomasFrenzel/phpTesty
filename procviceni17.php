<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procvičení 17</title>
</head>
<body>
    <?php 
    $age = 19;
     if($age > 18 && $age < 30){
        echo "Jsi v rozmezí 18-30";
     } else{
        echo "Nejsi v rozmezí 18-30";
     }

     //druhý příklad

    $name = "David";
    $nameAge = 19;
    
     if($name == "David" || $nameAge > 18){
        echo "true";
     } else {
        echo "Fals";
     }

    ?>
</body>
</html>