<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php 

    //Switch - přepíínač
    //case == shoduje
    
    $name = "Hacker";
    switch($name){
        case "Hacker":
            echo "jake znáte utoky?";
            echo "<br>";
        case "Programator":
            echo "Jake znas jazyky";
            echo "<br>";
        case "grafik":
            echo "Rastrova grafika";
            echo "<br>";
        }
    

    //Break - ukončí funkci
    //default == Neshoduje ani s jedním

    switch($name){
        case "Hacker":
            echo "Jake znáš utoky?";
            echo "<br>";
            break;
        case "Programator":
            echo "Jake znas jazyky";
            echo "<br>";
            break;
        case "Grafik":
            echo "Rastrova grafika";
            echo "<br>";
            break;
        default:
            echo "nemam otázku";

    }

    ?>    



</body>
</html>