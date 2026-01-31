<?php
$name = array("roshni","vishkaha","devanshi");
echo count($name);
echo "<br>";
array_push($name, "aastha", "krishnaba");
print_r($name);
echo "<br>";
array_shift($name);
print_r($name);
array_unshift($name, "yash");
echo "<br>";
print_r($name);
echo "<br>";
if (in_array("yash", $name)) {
    echo "Name found";
}
$a = array("A", "B");
$b = array("C", "D");
$result = array_merge($a, $b);
echo "<br>";
print_r($result);
$rev = array_reverse($name);
echo "<br>";
print_r($rev);
$num = [1,2,3,4,5,7];
// sort($num);
echo "<br>";
rsort($num);
print_r($num);
echo "<br>";
$details = array("name"=>"krishnaba", "age"=>20);
print_r(array_keys($details));
echo "<br>";
print_r(array_values($details));
?>
