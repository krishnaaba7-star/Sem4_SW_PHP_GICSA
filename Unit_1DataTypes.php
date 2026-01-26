<?php
/*
String, Int, Float, Boolean, Object, Array, Null
*/

// String
$name = "krishnaba";
$last_name = 'solanki';

echo $name;
echo "<br>";
echo $last_name;
echo "<br>";
echo "my name is $name $last_name";
echo "<br>";

// Int : non-decimal Number
$income = 455;
$income2 = -125;

echo $income;
echo "<br>";
echo $income2;
echo "<br>";

// Float : Decimal Point Numbers
$income3 = 35.65;
echo $income3;
echo "<br>";

// Boolean : can be either true or false
$x = true;
$y = false;

echo $x;
echo "<br>";
echo var_dump($y);
echo "<br>";

$q = true;
echo var_dump($q);
echo "<br>";

// Object : Instances of Classes
// an object is a data type that stores data (properties)
// and functions (methods) together.
// (A school has many students → each student is an object)

// Array : Used to store multiple values in single variable
$friends = array("vishakha", "roshni", "aastha", "yogi", "yash", "sarthak");

echo var_dump($friends);
echo "<br>";
echo var_dump($friends[0]);
echo "<br>";
echo $friends[3];
echo "<br>";

// Null : nothing
$name = NULL;
echo "<br>";
echo $name;
echo "<br>";
echo var_dump($name);
?>
