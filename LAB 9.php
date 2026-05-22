<?php

echo "Enter purchase amount: ";

$amount = (float)readline();

if ($amount >= 1000) {

    $discount = $amount * 0.20;

    $total = $amount - $discount;

    echo "20% Discount Applied. Total to pay: $total";

} elseif ($amount >= 500 && $amount < 1000) {

    $discount = $amount * 0.10;

    $total = $amount - $discount;

    echo "10% Discount Applied. Total to pay: $total";

} else {

    echo "No discount applied. Total to pay: $amount";

}

?>
