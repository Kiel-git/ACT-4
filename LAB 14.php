<?php

echo "Menu:\n";

echo "1 = Add\n";

echo "2 = Edit\n";

echo "3 = Delete\n";

echo "Enter your choice (1-3): ";

$choice = (int)readline();


switch ($choice) {

    case 1:

        echo "You selected: Add";

        break;

    case 2:

        echo "You selected: Edit";

        break;

    case 3:

        echo "You selected: Delete";

        break;

    default:

        echo "Invalid selection!";

}

?>
