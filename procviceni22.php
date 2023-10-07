<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procvičení 22</title>
</head>
<body>
    <?php 
    //První Cvičení

    $if = "JS";
    if($if === "PHP"){
        echo "Učím se ".$if;
        echo "<br>";
    } elseif($if === "JS"){
        echo "Učím se ".$if;
        echo "<br>";
    } else{
        echo "debile";
        echo "<br>";
    }

    //Druhé cvičení
    for($i = 0; $i <= 10; $i++){
        echo "$i";
        echo "<br>";
    }

    //Třetí cvičení

    $jazyk = "PHP";
    switch($jazyk){
        case "PHP":
            echo "Muj jazyk je $jazyk";
            echo "<br>";
            break;
        case "JS":
            echo "Muj jazyk je $jazyk";
            echo "<br>";
            break;
        case "HTML":
            echo "Muj jazyk je $jazyk";
            echo "<br>";
            break;
        default:
            echo "Neznám tento jazyk";
    }
    
    
    
    
    
    ?>
</body>
</html>