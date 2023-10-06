<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pokud/jinak</title><!--IF Else ElseIf-->
</head>
<body>
<?php
    $job = "hacker";
    $mzda = 100000;
    $vyska = 179.5;
    $dostupnost = true;

    if(3 > 1){
        echo"Ano, je to pravda";
    } else{
        echo "Jsi Debil?";
    }
echo "<br>";
    $heslo1 = "123a";
    if($heslo1 == "123a"){
        echo "Welcome";
    } else{
        echo "Are you crazy???";
    }
echo "<br>";
    $pozice = "hacker";

    if($pozice == "hacker"){
        echo "co znáte za programovací prostředí?";
    } elseif($pozice == "ekonom"){
        echo "ekonomie je fajn";
    } elseif($pozice == "majitel"){ 
        echo "welcome Manager";
    } else{
        echo "Neznám tuto pozici";
    }
?>
</body>
</html>