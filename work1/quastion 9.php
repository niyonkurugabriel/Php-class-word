<?php
$a = 1; 
$b = -3; 
$c = 2; 
$discriminant = ($b ** 2) - (4 * $a * $c);
if ($discriminant > 0) {
    echo "Two real solutions.";
} elseif ($discriminant == 0) {
    echo "One real solution.";
} else {
    echo "No real solutions.";
}
?>
