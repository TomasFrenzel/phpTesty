<?php 

if(isset($_POST["login"])){
    $emailLogin = $_POST["email"];
    $passwordlogin = $_POST["password"]

    $query = "SELECT * FROM users WHERE email='$emailLogin'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Kontrola, zda byl vrácen nějaký záznam
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);//da vsech nalezenyých emailu fatch udělá to že si můžeme brát data

            // Kontrola hesla
            if (password_verify($password, $row['password'])) {
                // Úspěšné přihlášení

                //start
                session_start();

                // Uložení uživatelských informací do session pro budoucí použití
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['email'];

                echo "Přihlášení úspěšné!"; }  }
} 
 }

?>