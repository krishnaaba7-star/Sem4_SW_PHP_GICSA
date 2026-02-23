<?php 
$a = 10;
$b = &$a;   // $b is a reference to $a

$b = 20;

echo $a;    // Output: 20

echo "<br>";


function addFive(&$num) {
    $num += 5;
}

$x = 10;
addFive($x);

echo $x;   // Output: 15

echo "<br>";

$numbers = [1, 2, 3];

foreach ($numbers as &$value) {
    $value *= 2;
}

print_r($numbers);
// Output: [2, 4, 6]\

echo "<br>";
unset($value);
?>
