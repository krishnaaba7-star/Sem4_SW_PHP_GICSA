<?php
function addTen($num){
    $num = $num + 10;
}
$x = 5;
addTen($x);

echo $x;



// function addTen(&$num) {
//     $num = $num + 10;
// }

// $x = 5;
// addTen($x);

// echo $x;   // Output: 15

?>
