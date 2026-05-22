<?php

echo "Enter number (1-12): ";

$month = (int)readline();


switch ($month) {

    case 1: echo "Month: January"; break;

    case 2: echo "Month: February"; break;

    case 3: echo "Month: March"; break;

    case 4: echo "Month: April"; break;

    case 5: echo "Month: May"; break;

    case 6: echo "Month: June"; break;

    case 7: echo "Month: July"; break;

    case 8: echo "Month: August"; break;

    case 9: echo "Month: September"; break;

    case 10: echo "Month: October"; break;

    case 11: echo "Month: November"; break;

    case 12: echo "Month: December"; break;

    default: echo "Invalid month number! Enter 1-12 only.";

}

?>
