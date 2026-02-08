<?php
echo strlen("Krishnaba");
echo "<br>";
echo date("Y-m-d"); 
echo "<br>";
echo sqrt(16);   
echo "<br>";


function hello() {
    echo "Hello, Welcome to my PHP class!";
}
hello();
echo "<br>";
function add($a, $b) {
    echo $a + $b;
}
add(5, 3);  // Output: 8

echo "<br>";
function square($n) {
    return $n * $n;
}
$result = square(4);
echo $result;  // Output: 16

echo "<br>";
function sayHello($name = "Guest") {
    echo "Hello $name";
}
sayHello();        // Hello Guest
echo "<br>";
sayHello("Riya");  // Hello Riya

echo "<br>";
function test() {
    $x = 10;
    echo $x;
}
test();

echo "<br>";
$x = 20;
function show() {
    global $x;
    echo $x;
}
show();
?>
