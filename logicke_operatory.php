<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logické operátory</title>
</head>
<body>
    
    <?php 
    /*
    *dva typy
    *and(&&)
    *or(||)
    *
    */

    // A zároven
    $jmeno = "Tomáš";
    $vek = 18;

    if($jmeno == "Tomáš" && $vek >= 18){
        echo "Ano jsi Tomáš";
    } else{
        echo "Nejsi Tomáš";
    }
echo"<br>";
echo"<br>";
echo"<br>";

    //Nebo
    $name = "Martin";
    $age = 20;

    if($name == "Martin" || $age >= 18){
        echo "True";
    } else{
        echo "Fals";
    }
echo"<br>";
    if($name == "Adam" || $age >= 18){
        echo "True";
    } else{
        echo "Fals";
    }
echo"<br>";
    if($name == "Martin" || $age >= 25){
        echo "True";
    } else{
        echo "Fals";
    }
echo"<br>";
    if($name == "Adam" || $age >= 25){
        echo "True";
    } else{
        echo "Fals";
    }


    ?>
</body>
</html>