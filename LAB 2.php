<?php
// Ask user to input a number
echo "Enter a number: ";
$number = trim(fgets(STDIN));

// Check if the number is positive or negative
if ($number >= 0) {
    echo "Positive number";
} else {
    echo "Negative number";
}
?>
