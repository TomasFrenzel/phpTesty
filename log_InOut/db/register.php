<?php 

if (isset($_POST["submit"])) {
    
    
    // Check if all required fields are set
    if (isset($_POST["email"], $_POST["password"], $_POST["password2"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        if (!($password == $password2)) {

            echo 'zadali jste spatné heslo';
        
        } else {
            
            $salt = 'saka9@*6sJAjh*hg5jS@d3*4sad*H@A';

            function secouredPass($password) {
                //algoritmus hesla
                return $salt . $password . chunk_split($salt, 12 , ".");
}
            $hashPassword = password_hash(secouredPass($password), PASSWORD_BCRYPT,['cost' => 12]);
             // 
             $query = "INSERT INTO users (email, pass) VALUES ('$email', '$hashPassword')";

             $result = mysqli_query($connection, $query);
             
             //otevře login.php
             header('location: login.php');
 
             if (!$result) {
                 die ("dotaz do databáze selhal" . mysqli_error());
             }
        }
    } else {
        echo 'Některé povinné pole nebylo vyplněno.';
    }
}





/*if (isset($_POST["submit"])){
  echo 'data odeslány';
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if ($password == $password2){
        echo 'bum';
        $query = "INSERT INTO users(email,password) 
        VALUES('$email','$password')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die ("dotaz do databze selhal".mysqli_error());
        }
    }else{
        echo 'zadali jste spatné heslo';
    }
    
    

    Undefined array key "password2" in C:\xampp\htdocs\PVA\phpTesty\log_InOut\db\register.php on line 8


}
*/

?>