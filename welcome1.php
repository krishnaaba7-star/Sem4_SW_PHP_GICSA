<?php
$name = $_POST['username'];
echo "Welcome " . $name;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form Submitted!";
}

if (isset($_POST['username'])) {
    echo $_POST['username'];
}

if (empty($_POST['username'])) {
    echo "Name is required";
} else {
    $name = htmlspecialchars($_POST['username']);
    echo "Hello " . $name;
}
?>