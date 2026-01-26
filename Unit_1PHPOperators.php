<?php
// Arithmetic Operators
$a = 10;
$b = 3;

echo $a + $b; // 13
echo $a - $b; // 7
echo $a * $b; // 30
echo $a / $b; // 3.3333
echo $a % $b; // 1
echo $a ** $b; // 1000 (10^3)

// Assignment Operators

$a = 5;
$a += 3; // $a = 8
$a -= 2; // $a = 6
$a *= 2; // $a = 12
$a /= 3; // $a = 4
$a %= 3; // $a = 1


// Comparison Operators

$x = 5;
$y = "5";

var_dump($x == $y);   // true (equal value)
var_dump($x === $y);  // false (not same type)
var_dump($x != $y);   // false
var_dump($x !== $y);  // true
var_dump($x < $y);    // false
var_dump($x > $y);    // false
var_dump($x <= $y);   // true
var_dump($x >= $y);   // true
var_dump($x <=> $y);  // 0 (equal)

// Increment / Decrement Operators


$a = 5;

echo ++$a; // 6 (pre-increment)
echo $a++; // 6 (post-increment, then $a=7)
echo --$a; // 6 (pre-decrement)
echo $a--; // 6 (post-decrement, then $a=5)

// Logical Operators

$x = true;
$y = false;

var_dump($x && $y); // false
var_dump($x || $y); // true
var_dump(!$x);      // false
var_dump($x xor $y); // true

// String Operators

$str1 = "Hello";
$str2 = "World";

echo $str1 . " " . $str2; // "Hello World"

$str1 .= " " . $str2; // $str1 = "Hello World"
echo $str1;

// Array Operators

$a = ["a" => 1, "b" => 2];
$b = ["b" => 3, "c" => 4];

print_r($a + $b); // Union: ["a"=>1, "b"=>2, "c"=>4] //print_r() prints an array in a human-readable format, whereas echo cannot directly print an array and will result in an error

var_dump($a == $b);  // false (values not equal)
var_dump($a === $b); // false (order & values)
var_dump($a != $b);  // true

//  Other Operators : 
// Ternary operator
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status; // Adult

?>