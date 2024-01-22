<?php
//Header
$list ="přihlášení";
include "template/templateHeader.php";
//Připojení
include "db/connect.php";

//Login
include "db/hehe.php";

?>
<body>
    <H1>Prosím přihlašte se xddd</H1>
    <form action="login.php" method="post">
        <input type="email"placeholder="Email" name="email"><br>
        <input type="password"placeholder="heslo" name="password"><br>
        <input type="submit" name="login"value="Login">
    </form>
</body>
</html>