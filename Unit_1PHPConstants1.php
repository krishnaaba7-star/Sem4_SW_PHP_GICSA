<?php
// Constants are global
define('name', 'hello');

$company = "Apache";

function show_name() {
    global $company;
    echo name;
    $a = 5;
    echo $company;
}

// echo $a;
show_name();
?>
