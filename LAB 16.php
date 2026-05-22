<?php

echo "Enter traffic light color (red, yellow, green): ";

$color = strtolower(readline());


switch ($color) {

    case 'red':

        echo "Action: STOP";

        break;

    case 'yellow':

        echo "Action: PREPARE TO STOP";

        break;

    case 'green':

        echo "Action: GO";

        break;

    default:

        echo "Invalid color!";

}

?>

