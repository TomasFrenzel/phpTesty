<?php

        include "mysql/db.php";

        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die ("dotaz do databze selhal".mysqli_error());
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

        <pre>
            toto    je     predformatovany
            text
    </pre>

    <form action="index.php" method="post">
        <input type="text"placeholder="uživatelké jmeno" name="username"><br>
        <input type="password"placeholder="heslo" name="password"><br>
        <input type="submit" name="submit"value="Odelsat">
    </form>
</body>
</html>