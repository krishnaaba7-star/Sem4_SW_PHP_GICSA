<?php
function greet($name) {   // $name is a parameter
    echo "Hello, $name!";
}

greet("Krishna");  // "Krishna" is an argument

echo "<br>";
function hello($goodname = "Guest") {
    echo "Hello, $goodname!";

}
hello();
echo "<br>";
hello("Vishkaha");

echo "<br>";
function addOne($x) {
    $x = $x + 1;
}

$num = 10;
addOne($num);

echo $num;


echo "<br>";
function addFive(&$num) {
    $num += 5;
}

$value = 10;
addFive($value);

echo $value; // Output: 15

echo "<br>";
function sum(...$numbers) {
    return array_sum($numbers);
}

echo sum(10, 20, 30); // Output: 60

echo "<br>";
function add(int $a, int $b) {
    return $a + $b;
}

echo add(5, 3); // 8
echo "<br>";
function student($name, $age) {
    echo "$name is $age years old.";
}

student(age: 20, name: "Krishna");
?>
