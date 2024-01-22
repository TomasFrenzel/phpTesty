<?php
require "db/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Zabezpečení proti SQL injection pomocí připraveného dotazu
    $query = "SELECT * FROM users WHERE email='" . $email . "'";    
    echo $query;
    $result = mysqli_query($connection, $query);
    var_dump($result);

    if ($result) {
        // Kontrola, zda byl vrácen nějaký záznamu
        if (mysqli_num_rows($result) == 1) {

            while($row = mysqli_fetch_assoc($result)){
            $passDat=$row["pass"];
            echo $passDat;
            }
            
            //salt
            $salt = 'saka9@*6sJAjh*hg5jS@d3*4sad*H@A';
            //funcke databaze
            function secouredPass($password) {
                //algoritmus hesla
                return $salt . $password . chunk_split($salt, 12 , ".");
            }
            $hashPassword = password_hash(secouredPass($password), PASSWORD_BCRYPT,['cost' => 12]);
            echo $hashPassword;



            
            //kontrola zda je heslo správné
           if (password_verify(secouredPass($password), $passDat)){
                echo "Jste přihlášen";
            
            //header('location: user.php');
            }else {
                echo "špatné heslo jste zadal";
            }
        }   
    }else {
        echo "Uživatel s tímto emailem neexitusje";
        
        }
   
}
       

?>