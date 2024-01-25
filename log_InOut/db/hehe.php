<?php
require_once "db/connect.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Zabezpečení proti SQL injection pomocí připraveného dotazu
    $query = "SELECT * FROM users WHERE email='" . $email . "'";    
    
    $result = mysqli_query($connection, $query);
    

    if ($result) {
        // Kontrola, zda byl vrácen nějaký záznamu
        if (mysqli_num_rows($result) == 1) {

            while($row = mysqli_fetch_assoc($result)){
            $passDat=$row["pass"];
            
            //session email a id a username 
            $_SESSION["email"] = $row["email"];
            $_SESSION["ID"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            }
            
            //salt
            $salt = 'saka9@*6sJAjh*hg5jS@d3*4sad*H@A';
            //funcke databaze
            function secouredPass($password) {
                //algoritmus hesla
                return $salt . $password . chunk_split($salt, 12 , ".");
            }
            $hashPassword = password_hash(secouredPass($password), PASSWORD_BCRYPT,['cost' => 12]);
            



            
            //kontrola zda je heslo správné
           if (password_verify(secouredPass($password), $passDat)){
                echo "Jste přihlášen";
            
            //otevře user.php
          
            header('location: user.php');


            }else {
                echo "špatné heslo jste zadal";
            }
        }   
    }else {
        echo "Uživatel s tímto emailem neexitusje";
        
        }
   
}
       

?>