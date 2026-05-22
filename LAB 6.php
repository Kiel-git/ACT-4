<?php

$fixed_pass = "admin123";
echo "Enter password: ";
$user_pass = readline();

if ($user_pass == $fixed_pass) {

    echo "Access Granted";

} else {
    echo "Access Denied";
}

?>
