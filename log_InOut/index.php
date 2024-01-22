<?php 
$list = "Registrace";
include "db/connect.php";

//REGISTER
include "db/register.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="email"placeholder="Email" name="email"><br>
        <input type="password"placeholder="heslo" name="password"><br>
        <input type="password"placeholder="znova heslo" name="password2"><br>
        <input type="submit" name="submit"value="Odelsat">
    </form>

    <a href="login.php"><button type="button">Login</button> </a>
</body>
</html>
