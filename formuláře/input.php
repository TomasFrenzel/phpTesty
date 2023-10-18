<?php

if (isset($_POST["submit"])){
    echo "formulář byl poslán <br>";

    $name = ["David". "Tomáš", "Martin", "Kuba"];
    $username = $_POST["username"];
    if(strlen($username) <= 4){
        echo "Vaše uživatelské jméno musí byý dlouhé minimálně 5 znaků<br>";
    }else{
        echo "Vaše uživatelké jmeno je $username <br>";
    }
    if(in_array($username, $name)){
        echo "Jste přihlášen jako" .$username;
    }else{
        echo "špatné uživatelské jméno";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <form action="input.php" method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="submit"><br>
    </form>
</body>
</html>