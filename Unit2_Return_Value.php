<?php
// function functionName() {
//     return value;
// }

function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3);
echo $result;  // Output: 8

function greet($name) {
    return "Hello, " . $name;
}

echo greet("Krishna");

function isEven($number) {
    return $number % 2 == 0;
}

var_dump(isEven(4));  // true

function getColors() {
    return ["Red", "Green", "Blue"];
}

$colors = getColors();
print_r($colors);
?>
