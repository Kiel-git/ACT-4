<?php
// Input three numbers
$num1 = 15;
$num2 = 42;
$num3 = 27;

// Compare the numbers to find the largest
if ($num1 >= $num2 && $num1 >= $num3) {
    $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largest = $num2;
} else {
    $largest = $num3;
}

// Display the largest number
echo "The largest number is: $largest";
?>
