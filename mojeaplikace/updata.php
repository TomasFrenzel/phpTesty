<?php

//připojení do databaze
include "mysql/db.php";

//vyber všech dat z databaze
$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if(!$result){
    die ("dotaz do databze selhal".mysqli_error());
}

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    $query2 = "UPDATE users SET 
    username = '$username', password='$password'
    WHERE id = $id ";

    $result2 = mysqli_query($connection, $query2);

    if(!$result2){
        die("Query selhalo".mysqli_error());
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="updata.php" method="post">
        <input type="text"placeholder="uživatelké jmeno" name="username"><br>
        <input type="password"placeholder="heslo" name="password"><br>

        <select name="id" id="">

            <?php
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["id"];
                    echo "<option value='$id'>$id</option>";
                }
            ?>

        </select>

        <input type="submit" name="submit"value="Odelsat">


    </form>
</body>
</html>