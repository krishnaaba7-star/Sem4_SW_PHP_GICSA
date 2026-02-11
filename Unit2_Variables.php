<?php
$name = "Krish";
$age = 20;
$name = "Krishna";
$age = 20;
$price = 99.99;
$isStudent = true;
$colors = array("Red", "Green", "Blue");
$x = null;
function test() {
    $x = 5;
    echo $x;
}
$x = 10;

function test1() {
    global $x;
    echo $x;
}

function counter() {
    static $count = 0;
    $count++;
    echo $count;
}

counter(); // 1
counter(); // 2

$name = "Krishna";
$$name = "Student";

echo $Krishna; // Output: Student
?>
