<?php
// for Loop

for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// while Loop

$i = 1;
while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}

// do...while Loop

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
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) break;
    echo $i;
}

// continue
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue;
    echo $i;
}
?>