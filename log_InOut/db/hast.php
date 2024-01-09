<?php   
$password = "299";
$hashed = password_hash($password, PASSWORD_DEFAULT);
echo $hashed;

?>