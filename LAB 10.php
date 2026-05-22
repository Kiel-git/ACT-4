<?php

$correct_user = "Maxy";

$correct_pass = "1234";

echo "Enter Username: ";

$user = readline();

echo "Enter Password: ";

$pass = readline();

if ($user == $correct_user && $pass == $correct_pass) {
    echo "Login Successful! Welcome Maxy.";

} else {

    echo "Login Failed! Invalid username or password.";
}

?>
