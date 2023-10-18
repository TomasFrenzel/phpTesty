<?php 

    if(isset($_POST["submit"])){
        echo "data odelsány";

        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username && $password){
            echo $username;
            echo "<br>";
            echo $password;
            echo "<br>";
        } else{
            echo "něco nám chybí";
            echo "<br>";
        }

        //pripojení do databáze

        $connection = mysqli_connect("localhost", "root", "","loginapplication");
        if($connection){
            echo "jsme propojeni s databází";
        } else{
            die("ou neco se pokazilo"); //zastaví zbytek procesu když se to pokazí
        }

        $query = "INSERT INTO users(username,password) 
        VALUES('$username','$password')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die ("dotaz do databze selhal".mysqli_error());
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
    <form action="index.php" method="post">
        <input type="text"placeholder="uživatelké jmeno" name="username"><br>
        <input type="password"placeholder="heslo" name="password"><br>
        <input type="submit" name="submit"value="Odelsat">
    </form>
</body>
</html>