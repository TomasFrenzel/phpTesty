<?php
session_start();
$list = "testy";
require_once "db/connect.php";
$username = $_SESSION["username"];
$email = $_SESSION["email"];

require_once "template/templateHeader.php";
/*databaze bude obsahovat users a bude obsahovat jmeno users
*z nastavení a bude tam vytahovat. 
*
*/ 


if (isset($_POST["submit"])){

    session_destroy();
    header ('location: register.php');
    }
    

echo 'Email uživatele '. $_SESSION["email"];



echo"xxx
<body>
    <H2>jste přihlášen pane $username</H2>
    <form action='user.php' method='post'>
    <input type='submit' name'logout'value='ODHLÁSIT SE'>
</form>
</body>
</html>
";
?>
