<?php 


    //pripojení do databáze

    $connection = mysqli_connect("localhost", "root", "","loginapplication");
    if($connection){
        echo "jsme propojeni s databází";
    } else{
        die("ou neco se pokazilo"); //zastaví zbytek procesu když se to pokazí
    }
?>