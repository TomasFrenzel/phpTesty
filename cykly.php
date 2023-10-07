<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cykly</title>
</head>
<body>
    <?php 
    //While == Dokud

    $counter = 0;
      while( $counter < 10 ){
        echo "Ahoj";
        echo "<br>";
        $counter = $counter + 1;
      }
    $game = "exit";
    $pokus = 0;
    while( $game == "exit" && $pokus < 10 ){
        echo "odcházíte ze hry";
        echo "<br>";
        $pokus = $pokus + 1;
    }

    /*
    *
    *   FOR
    *
    */


    //  kolik se rovna; podmínka; inkrementace
    for($i = 0; $i <= 10; $i++){
        echo $i;
        echo "<br>";
    }
    // $i++ == je jako kdybychom napsali $i = $i + 1; říka se tomu imkrementace
    //opak je $i--

    for($e = 10; $e >=0; $e--){
        echo $e;
        echo "<br>";
    }

    /*
    *
    *   FOREACH
    *
    */

    $jmena = ["David", "Martin", "Eliška", "Martina"];

    foreach($jmena as $zamestnanci){
        echo $zamestnanci;
        echo "<br>";
    }

    //pro práci s POLEM
    
    ?>
</body>
</html>