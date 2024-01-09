<?php   
$password = 'heslo';
$salt = 'saka9@*6sJAjh*hg5jS@d3*4sad*H@A';

function secouredPass($password) {
    //tajny algoritmus pro sdilení hesla
    return $salt . $password . chunk_split($salt, 10 , ".");
}

echo password_hash(secouredPass($password), PASSWORD_BCRYPT,['cost' => 12]);


//ověření

$saltedPass = secouredPass('heslo');

//hash z DB
$hash = password_hash($saltedPass, PASSWORD_BCRYPT, ['cost' => 12]);

//Ověření
if(password_verify($saltedPass, $hash)){
    echo 'heslo je správné';
} else {
    echo 'heslo je šatně';
}
?>