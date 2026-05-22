<?php

echo "Enter first number: ";

$num1 = (float)readline();

echo "Enter second number: ";

$num2 = (float)readline();

echo "Enter operator (+, -, *, /): ";

$op = readline();


switch ($op) {

    case '+':

        $result = $num1 + $num2;

        echo "Result: $num1 + $num2 = $result";

        break;

    case '-':

        $result = $num1 - $num2;

        echo "Result: $num1 - $num2 = $result";

        break;

    case '*':

        $result = $num1 * $num2;

        echo "Result: $num1 * $num2 = $result";

        break;

    case '/':

        if ($num2 != 0) {

            $result = $num1 / $num2;

            echo "Result: $num1 / $num2 = $result";

        } else {

            echo "Error: Cannot divide by zero.";

        }

        break;

    default:

        echo "Invalid operator!";

}

?>
