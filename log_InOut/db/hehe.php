<?php 
require "db/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailLogin = $_POST["email"];
    $passwordlogin = $_POST["password"];

    // Zabezpečení proti SQL injection pomocí připraveného dotazu
    $query = "SELECT * FROM users WHERE email=?";
    
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $emailLogin);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        // Kontrola, zda byl vrácen nějaký záznam
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // Kontrola hesla
            if (password_verify($passwordlogin, $row['password'])) {
                // Úspěšné přihlášení

                // Start session
                session_start();

                // Uložení uživatelských informací do session pro budoucí použití
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['email'];

                echo "Přihlášení úspěšné!";
                header('location: user.php');
            } else {
                echo "Nesprávné heslo.";
            }
        } else {
            echo "Uživatel s tímto emailem neexistuje.";
        }
    } else {
        echo "Chyba při provedení dotazu: " . mysqli_error($connection);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
?>