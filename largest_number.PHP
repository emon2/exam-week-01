<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

$larger = null;
$largest = null;

if ($num1 >= $num2) {
    $larger = $num1;
} else {
    $larger = $num2;
}

if ($larger >= $num3) {
    $largest = $larger;
} else {
    $largest = $num3;
}

echo "The largest number among the three is: " . $largest;