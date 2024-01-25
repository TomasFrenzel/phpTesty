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

echo 'Email uživatele '. $_SESSION["email"];



echo"
<body>
    <H2>jste přihlášen pane $username</H2>
</body>
</html>
";
?>