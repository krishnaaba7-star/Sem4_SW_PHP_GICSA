<?php
// if Statement
$age = 18;
if ($age >= 18) {
    echo "You are eligible to vote";
}



// if…else Statement
$marks = 28;
if ($marks >= 40) {
    echo "Pass";
} else {
    echo "Fail";
}


// if…elseif…else Statement

if ($marks >= 75) {
    echo "Distinction";
} elseif ($marks >= 60) {
    echo "First Class";
} elseif ($marks >= 40) {
    echo "Pass";
} else {
    echo "Fail";
}

// switch Statement

$day = 4;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Invalid day";
}

// for Loop

for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

//  while Loop

$i = 0;
while ($i <= 6) {
    echo $i . "<br>";
    $i++;
}

// do…while Loop

$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);

// foreach Loop

$colors = array("Red", "Green", "Blue");

foreach ($colors as $color) {
    echo $color . "<br>";
}

// break

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . "<br>";
}

// continue

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i . "<br>";
}


?>