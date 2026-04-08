<?php
$name = $_GET['username'];
echo "Welcome " . $name;


if (isset($_GET['username'])) {
    echo $_GET['username'];
}

if (!empty($_GET['username'])) {
    $name = htmlspecialchars($_GET['username']);
    echo "Hello " . $name;
} else {
    echo "Name is required";
}
?>