<?php
$fruits = array("Apple", "Banana", "Mango");
// Using short array syntax (recommended)
$fruits = ["Apple", "Banana", "Mango"];


echo $fruits[0];  // Apple
echo $fruits[2];  // Mango

print_r($fruits);
var_dump($fruits);


foreach ($fruits as $value) {
    echo $value . "<br>";
}

$fruits[] = "Orange";

$fruits[1] = "Grapes"; // Banana → Grapes

unset($fruits[0]);

$fruits = array_values($fruits);
?>