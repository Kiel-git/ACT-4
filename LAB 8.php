<?php

echo "Enter age: ";
$age = (int)readline();
echo "Enter citizenship: ";
$citizen = readline();
if ($age >= 18) {

    if ($citizen == "Filipino") {

        echo "Eligible to vote.";

    } else {

        echo "Not eligible to vote (not Filipino citizen).";
    }

} else {

    echo "Not eligible to vote (under 18).";

}

?>
