<?php
// Input a student's grade
$grade = 85;

// Display the result based on the grade
if ($grade >= 90 && $grade <= 100) {
    echo "Excellent";
} elseif ($grade >= 80 && $grade <= 89) {
    echo "Good";
} elseif ($grade >= 70 && $grade <= 79) {
    echo "Average";
} else {
    echo "Failed";
}
?>
