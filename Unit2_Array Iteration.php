<?php
$fruits = ["apple", "banana", "orange", "grape"];

// Simple iteration
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}


$person = [
    "name" => "Sarah",
    "age" => 28,
    "country" => "Canada"
];

foreach ($person as $key => $value) {
    echo "$key = $value"."<br>";
}


$numbers = [1, 2, 3, 4, 5];

echo "<b>Without reference:</b><br>";
foreach ($numbers as $num) {
    echo ($num * 2) . ", ";
}

echo "<br><br>Original array:<br>";
print_r($numbers);

echo "<br><br><b>With reference:</b><br>";
foreach ($numbers as &$num) {
    $num = $num * 2;   
}
unset($num); 

echo implode(", ", $numbers);

echo "<br><br>Modified array:<br>";
print_r($numbers);


$colors = ["red", "green", "blue", "yellow"];
for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "\n";
}
// Better performance - calculate count once
$length = count($colors);
for ($i = 0; $i < $length; $i++) {
    echo $colors[$i] . "\n";
}

echo current($fruits);  // apple
next($fruits);
echo current($fruits);  // banana

prev($fruits);
echo current($fruits);  // apple
reset($fruits);
end($fruits);
echo current($fruits);  
echo key($fruits);  




?>
